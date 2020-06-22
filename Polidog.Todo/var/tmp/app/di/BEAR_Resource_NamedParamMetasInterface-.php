<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\NamedParamMetas($singleton('Doctrine\\Common\\Cache\\Cache-'), $singleton('Doctrine\\Common\\Annotations\\Reader-'));
$is_singleton = false;
return $instance;
