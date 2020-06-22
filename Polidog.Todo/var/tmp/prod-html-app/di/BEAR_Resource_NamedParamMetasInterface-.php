<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\NamedParamMetas($singleton('Doctrine\\Common\\Cache\\Cache-', array('BEAR\\Resource\\NamedParamMetas', '__construct', 'cache')), $prototype('Doctrine\\Common\\Annotations\\Reader-'));
$is_singleton = false;
return $instance;
