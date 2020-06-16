<?php

declare(strict_types=1);

namespace BEAR\Resource\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class Link implements \JsonSerializable
{
    /**
     * Relation to the target resource of the link
     *
     * @var string
     */
    public $rel;

    /**
     * A URI template, as defined by RFC 6570
     *
     * @var string
     */
    public $href;

    /**
     * A method for the Link
     *
     * @var string
     * @Enum({"get", "post", "put", "patch", "delete"})
     */
    public $method = 'get';

    /**
     * A title for the link
     *
     * @var string
     */
    public $title = '';

    /**
     * Crawl tag ID for crawl request
     *
     * @var string
     */
    public $crawl = '';

    public function jsonSerialize()
    {
        $json = [
            'rel' => $this->rel,
            'href' => $this->href,
            'method' => $this->method
        ];
        if ($this->title) {
            $json += ['title' => $this->title];
        }

        return $json;
    }
}
