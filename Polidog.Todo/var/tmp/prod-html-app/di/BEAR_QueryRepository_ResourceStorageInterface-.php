<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\ResourceStorage($singleton('Doctrine\\Common\\Cache\\CacheProvider-BEAR\\RepositoryModule\\Annotation\\Storage', array('BEAR\\QueryRepository\\ResourceStorage', '__construct', 'cache')));
$is_singleton = false;
return $instance;
