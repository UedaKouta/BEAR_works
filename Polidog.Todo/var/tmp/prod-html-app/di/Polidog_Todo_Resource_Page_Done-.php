<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Resource\Page\Done();
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$instance->setResource($singleton('BEAR\\Resource\\ResourceInterface-'));
$is_singleton = false;
return $instance;
