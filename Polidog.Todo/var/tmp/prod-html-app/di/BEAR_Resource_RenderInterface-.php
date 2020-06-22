<?php

namespace Ray\Di\Compiler;

$instance = new \Madapaja\TwigModule\TwigRenderer($prototype('Twig\\Environment-'), '/redirect/redirect.html.twig', null);
$is_singleton = true;
return $instance;
