<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Resource\App\Todo();
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$instance->setAuraSql($singleton('Aura\\Sql\\ExtendedPdoInterface-'));
$is_singleton = false;
return $instance;
