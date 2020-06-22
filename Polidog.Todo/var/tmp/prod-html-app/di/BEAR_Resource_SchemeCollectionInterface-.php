<?php

namespace Ray\Di\Compiler;

$instance = new \BEAR\Resource\Module\SchemeCollectionProvider('Polidog\\Todo', $injector());
$is_singleton = false;
return $instance->get();
