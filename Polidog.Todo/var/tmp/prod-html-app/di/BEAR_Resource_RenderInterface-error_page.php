<?php

namespace Ray\Di\Compiler;

$instance = new \Madapaja\TwigModule\ErrorPagerRenderer($prototype('Twig\\Environment-'), '/error/error.html.twig');
$is_singleton = false;
return $instance;
