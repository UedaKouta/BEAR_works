<?php

namespace Ray\Di\Compiler;

$instance = new \Ray\WebFormModule\AuraInputInterceptor($singleton('Doctrine\\Common\\Annotations\\Reader-'), $prototype('Ray\\WebFormModule\\FailureHandlerInterface-'));
$is_singleton = true;
return $instance;
