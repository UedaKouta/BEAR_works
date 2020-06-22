<?php

namespace Ray\Di\Compiler;

$instance = new \Doctrine\Common\Cache\ArrayCache();
$is_singleton = true;
return $instance;
