<?php

namespace Ray\Di\Compiler;

$instance = new \Ray\WebFormModule\AuraInputInterceptor($prototype('Doctrine\\Common\\Annotations\\Reader-'), $prototype('Ray\\WebFormModule\\FailureHandlerInterface-'));
$is_singleton = true;
return $instance;
