<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Resource\Page\Index_4006261029($prototype('Ray\\WebFormModule\\FormInterface-todo_form'));
$instance->bindings = array('createTodo' => array($singleton('Ray\\WebFormModule\\AuraInputInterceptor-')));
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$instance->setResource($singleton('BEAR\\Resource\\ResourceInterface-'));
$is_singleton = false;
return $instance;
