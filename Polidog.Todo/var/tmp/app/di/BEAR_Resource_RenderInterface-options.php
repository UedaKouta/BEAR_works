<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\OptionsRenderer($prototype('BEAR\\Resource\\OptionsMethods-'), true);
$is_singleton = false;
return $instance;
