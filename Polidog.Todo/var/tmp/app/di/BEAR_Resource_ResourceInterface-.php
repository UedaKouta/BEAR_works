<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Resource($prototype('BEAR\\Resource\\FactoryInterface-'), $prototype('BEAR\\Resource\\InvokerInterface-'), $prototype('BEAR\\Resource\\AnchorInterface-'), $prototype('BEAR\\Resource\\LinkerInterface-'), $prototype('BEAR\\Resource\\UriFactory-'));
$is_singleton = true;
return $instance;
