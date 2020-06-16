<?php

namespace Ray\Di\Compiler;

$instance = new \Twig\Loader\FilesystemLoader($prototype('-Madapaja\\TwigModule\\Annotation\\TwigPaths', array('Twig\\Loader\\FilesystemLoader', '__construct', 'paths')), null);
$is_singleton = false;
return $instance;
