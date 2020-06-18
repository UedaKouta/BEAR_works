<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Form\TodoForm();
$instance->setBaseDependencies($prototype('Aura\\Input\\BuilderInterface-'), $prototype('Aura\\Filter\\FilterFactory-'), $prototype('Aura\\Html\\HelperLocatorFactory-'));
$instance->postConstruct();
$is_singleton = false;
return $instance;
