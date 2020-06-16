<?php

declare(strict_types=1);

namespace BEAR\Resource;

use Ray\Di\InjectorInterface;

final class HttpAdapter implements AdapterInterface
{
    /**
     * @var InjectorInterface
     */
    private $injector;

    /**
     * @param InjectorInterface $injector Application dependency injector
     */
    public function __construct(InjectorInterface $injector)
    {
        $this->injector = $injector;
    }

    /**
     * {@inheritdoc}
     */
    public function get(AbstractUri $uri) : ResourceObject
    {
        unset($uri);

        return $this->injector->getInstance(HttpResourceObject::class);
    }
}
