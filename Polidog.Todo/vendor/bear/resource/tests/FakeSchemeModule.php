<?php

declare(strict_types=1);

namespace BEAR\Resource;

use Ray\Di\AbstractModule;

class FakeSchemeModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind(SchemeCollectionInterface::class)->toProvider(FakeSchemeCollectionProvider::class);
    }
}
