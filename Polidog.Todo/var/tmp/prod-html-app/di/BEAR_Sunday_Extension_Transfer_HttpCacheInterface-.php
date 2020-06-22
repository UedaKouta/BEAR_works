<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\QueryRepository\HttpCache($prototype('BEAR\\QueryRepository\\ResourceStorageInterface-'));
$is_singleton = false;
return $instance;
