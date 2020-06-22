<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Anchor($singleton('Doctrine\\Common\\Annotations\\Reader-'));
$is_singleton = false;
return $instance;
