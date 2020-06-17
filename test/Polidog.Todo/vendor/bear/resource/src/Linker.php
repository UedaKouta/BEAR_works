<?php

declare(strict_types=1);

namespace BEAR\Resource;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\Exception\LinkQueryException;
use BEAR\Resource\Exception\LinkRelException;
use Doctrine\Common\Annotations\Reader;
use function get_class;
use ReflectionMethod;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
final class Linker implements LinkerInterface
{
    /**
     * @var Reader
     */
    private $reader;

    /**
     * @var InvokerInterface
     */
    private $invoker;

    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * memory cache for linker
     *
     * @var array<array<int|string, mixed>|mixed>
     */
    private $cache = [];

    public function __construct(
        Reader $reader,
        InvokerInterface $invoker,
        FactoryInterface $factory
    ) {
        $this->reader = $reader;
        $this->invoker = $invoker;
        $this->factory = $factory;
    }

    /**
     * {@inheritdoc}
     *
     * @throws LinkQueryException
     * @throws \BEAR\Resource\Exception\LinkRelException
     */
    public function invoke(AbstractRequest $request)
    {
        $this->invoker->invoke($request);
        $current = clone $request->resourceObject;
        if ($current->code >= Code::BAD_REQUEST) {
            return $current;
        }

        foreach ($request->links as $link) {
            /** @psalm-suppress MixedAssignment */
            $nextResource = $this->annotationLink($link, $current, $request);
            $current = $this->nextLink($link, $current, $nextResource);
        }

        return $current;
    }

    /**
     * How next linked resource treated (add ? replace ?)
     *
     * @param mixed|ResourceObject $nextResource
     */
    private function nextLink(LinkType $link, ResourceObject $ro, $nextResource) : ResourceObject
    {
        /** @psalm-suppress MixedAssignment */
        $nextBody = $nextResource instanceof ResourceObject ? $nextResource->body : $nextResource;

        if ($link->type === LinkType::SELF_LINK) {
            $ro->body = $nextBody;

            return $ro;
        }

        if ($link->type === LinkType::NEW_LINK) {
            $ro->body[$link->key] = $nextBody;

            return $ro;
        }

        // crawl
        return $ro;
    }

    /**
     * Annotation link
     *
     * @throws \BEAR\Resource\Exception\MethodException
     * @throws \BEAR\Resource\Exception\LinkRelException
     * @throws Exception\LinkQueryException
     *
     * @return mixed|ResourceObject
     */
    private function annotationLink(LinkType $link, ResourceObject $current, AbstractRequest $request)
    {
        if (! is_array($current->body)) {
            throw new Exception\LinkQueryException('Only array is allowed for link in ' . get_class($current), 500);
        }
        $classMethod = 'on' . ucfirst($request->method);
        /** @var list<Link> $annotations */
        $annotations = $this->reader->getMethodAnnotations(new ReflectionMethod(get_class($current), $classMethod));
        if ($link->type === LinkType::CRAWL_LINK) {
            return $this->annotationCrawl($annotations, $link, $current);
        }

        /* @noinspection ExceptionsAnnotatingAndHandlingInspection */
        return $this->annotationRel($annotations, $link, $current)->body;
    }

    /**
     * Annotation link (new, self)
     *
     * @param \BEAR\Resource\Annotation\Link[] $annotations
     *
     * @throws \BEAR\Resource\Exception\UriException
     * @throws \BEAR\Resource\Exception\MethodException
     * @throws Exception\LinkQueryException
     * @throws Exception\LinkRelException
     */
    private function annotationRel(array $annotations, LinkType $link, ResourceObject $current) : ResourceObject
    {
        /* @noinspection LoopWhichDoesNotLoopInspection */
        foreach ($annotations as $annotation) {
            if ($annotation->rel !== $link->key) {
                continue;
            }
            $uri = uri_template($annotation->href, (array) $current->body);
            $rel = $this->factory->newInstance($uri);
            /* @noinspection UnnecessaryParenthesesInspection */
            $query = (new Uri($uri))->query;
            $request = new Request($this->invoker, $rel, Request::GET, $query);

            return $this->invoker->invoke($request);
        }

        throw new LinkRelException("rel:{$link->key} class:" . get_class($current), 500);
    }

    /**
     * Link annotation crawl
     *
     * @param array<object> $annotations
     *
     * @throws \BEAR\Resource\Exception\MethodException
     */
    private function annotationCrawl(array $annotations, LinkType $link, ResourceObject $current) : ResourceObject
    {
        $isList = $this->isList($current->body);
        /** @var array<array<string, mixed>> $bodyList */
        $bodyList = $isList ? (array) $current->body : [$current->body];
        $this->cache = [];
        /** @psalm-suppress MixedAssignment */
        foreach ($bodyList as &$body) {
            $this->crawl($annotations, $link, $body);
        }
        unset($body);
        $current->body = $isList ? $bodyList : $bodyList[0];

        return $current;
    }

    /**
     * @param array<object>        $annotations
     * @param array<string, mixed> $body
     *
     * @throws \BEAR\Resource\Exception\LinkQueryException
     * @throws \BEAR\Resource\Exception\MethodException
     * @throws \BEAR\Resource\Exception\LinkRelException
     * @throws \BEAR\Resource\Exception\UriException
     */
    private function crawl(array $annotations, LinkType $link, array &$body) : void
    {
        foreach ($annotations as $annotation) {
            /* @var $annotation Link */
            if (! $annotation instanceof Link || $annotation->crawl !== $link->key) {
                continue;
            }
            $uri = uri_template($annotation->href, $body);
            $rel = $this->factory->newInstance($uri);
            /* @noinspection UnnecessaryParenthesesInspection */
            $query = (new Uri($uri))->query;
            $request = new Request($this->invoker, $rel, Request::GET, $query, [$link], $this);
            $hash = $request->hash();
            if (array_key_exists($hash, $this->cache)) {
                /** @psalm-suppress MixedAssignment */
                $body[$annotation->rel] = $this->cache[$hash];

                continue;
            }
            /** @psalm-suppress MixedAssignment */
            $this->cache[$hash] = $body[$annotation->rel] = $this->invoke($request)->body;
        }
    }

    /**
     * @param mixed $value
     */
    private function isList($value) : bool
    {
        if (! is_array($value)) {
            return false;
        }
        $list = $value;
        /** @psalm-suppress MixedAssignment */
        $firstRow = array_pop($list);
        $keys = array_keys((array) $firstRow);
        $isMultiColumnMultiRowList = $this->isMultiColumnMultiRowList($keys, $list);
        $isMultiColumnList = $this->isMultiColumnList($value, $firstRow);
        $isSingleColumnList = $this->isSingleColumnList($value, $keys, $list);

        return $isSingleColumnList || $isMultiColumnMultiRowList || $isMultiColumnList;
    }

    /**
     * @param array<int, int|string> $keys
     * @param array<mixed>           $list
     */
    private function isMultiColumnMultiRowList(array $keys, array $list) : bool
    {
        if ($keys === [0 => 0]) {
            return false;
        }

        /** @psalm-suppress MixedAssignment */
        foreach ($list as $item) {
            if ($keys !== array_keys((array) $item)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param array<int|string, mixed> $value
     * @param mixed                    $firstRow
     */
    private function isMultiColumnList(array $value, $firstRow) : bool
    {
        return is_array($firstRow) && array_filter(array_keys($value), 'is_numeric') === array_keys($value);
    }

    /**
     * @param array<int|string, mixed> $value
     * @param list<array-key>          $keys
     * @param array<mixed, mixed>      $list
     */
    private function isSingleColumnList(array $value, array $keys, array $list) : bool
    {
        return (count($value) === 1) && $keys === array_keys($list);
    }
}
