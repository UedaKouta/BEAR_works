<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\NamedParameter($prototype('BEAR\\Resource\\NamedParamMetasInterface-'), $injector());
$is_singleton = true;
return $instance;
