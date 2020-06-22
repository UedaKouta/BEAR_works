<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Invoker($singleton('BEAR\\Resource\\NamedParameterInterface-'), $prototype('BEAR\\Resource\\ExtraMethodInvoker-'), $prototype('BEAR\\Resource\\LoggerInterface-'));
$is_singleton = false;
return $instance;
