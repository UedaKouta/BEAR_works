<?php

namespace Ray\Di\Compiler;

$instance = new \Madapaja\TwigModule\TwigErrorHandler($prototype('Madapaja\\TwigModule\\TwigErrorPage-'), $prototype('BEAR\\Sunday\\Extension\\Transfer\\TransferInterface-'), $singleton('Psr\\Log\\LoggerInterface-', array('Madapaja\\TwigModule\\TwigErrorHandler', '__construct', 'logger')));
$is_singleton = false;
return $instance;
