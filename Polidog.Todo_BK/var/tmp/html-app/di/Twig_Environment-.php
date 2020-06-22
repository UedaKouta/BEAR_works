<?php

namespace Ray\Di\Compiler;

$instance = new \Twig\Environment($prototype('Twig\\Loader\\LoaderInterface-Madapaja\\TwigModule\\Annotation\\TwigLoader'), $prototype('-Madapaja\\TwigModule\\Annotation\\TwigOptions', array('Twig\\Environment', '__construct', 'options')));
$is_singleton = false;
return $instance;
