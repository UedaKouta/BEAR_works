<?php

namespace Ray\Di\Compiler;

$instance = new \Madapaja\TwigModule\TwigErrorPage();
$instance->setRenderer($prototype('BEAR\\Resource\\RenderInterface-error_page'));
$is_singleton = false;
return $instance;
