<?php
namespace Polidog\Todo\Module;


use Madapaja\TwigModule\TwigErrorPageModule;
use Madapaja\TwigModule\TwigModule;
use Madapaja\TwigModule\MobileTwigModule;
use Ray\Di\AbstractModule;

class HtmlModule extends AbstractModule
{
    protected function configure()
    {
        // $this->install(new TwigModule());
        //
        // $appDir = dirname(dirname(__DIR__));
        // $paths = [$appDir . '/var/twig/'];
        // $this->bind()->annotatedWith(TwigPaths::class)->toInstance($paths);

        $this->install(new TwigModule);
        $this->install(new TwigErrorPageModule);
        $this->install(new MobileTwigModule);
    }

}
