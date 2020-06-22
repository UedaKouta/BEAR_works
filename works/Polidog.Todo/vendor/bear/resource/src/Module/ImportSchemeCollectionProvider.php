<?php

declare(strict_types=1);

namespace BEAR\Resource\Module;

use BEAR\Resource\Annotation\AppName;
use BEAR\Resource\Annotation\ImportAppConfig;
use BEAR\Resource\AppAdapter;
use BEAR\Resource\ImportApp;
use Ray\Di\InjectorInterface;
use Ray\Di\ProviderInterface;

class ImportSchemeCollectionProvider implements ProviderInterface
{
    /**
     * @var ImportApp[]
     */
    private $importAppConfig;

    /**
     * @var string
     */
    private $appName;

    /**
     * @var InjectorInterface
     */
    private $injector;

    /**
     * @AppName("appName")
     * @ImportAppConfig("importAppConfig")
     *
     * @param ImportApp[] $importAppConfig
     */
    public function __construct(string $appName, array $importAppConfig, InjectorInterface $injector)
    {
        $this->appName = $appName;
        $this->importAppConfig = $importAppConfig;
        $this->injector = $injector;
    }

    /**
     * {@inheritdoc}
     *
     * @return \BEAR\Resource\SchemeCollection
     */
    public function get()
    {
        $schemeCollection = (new SchemeCollectionProvider($this->appName, $this->injector))->get();
        foreach ($this->importAppConfig as $importApp) {
            $adapter = new AppAdapter($this->injector, $importApp->appName);
            $schemeCollection
                ->scheme('page')->host($importApp->host)->toAdapter($adapter)
                ->scheme('app')->host($importApp->host)->toAdapter($adapter);
        }

        return $schemeCollection;
    }
}
