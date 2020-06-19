<?php

namespace Ray\Di\Compiler;

$instance = new \Polidog\Todo\Resource\Page\Edit_3812446470($prototype('Ray\\WebFormModule\\FormInterface-todo_edit_form'));
$instance->bindings = array('editTodo' => array($singleton('Ray\\WebFormModule\\AuraInputInterceptor-')));
$instance->setRenderer($singleton('BEAR\\Resource\\RenderInterface-'));
$instance->setResource($singleton('BEAR\\Resource\\ResourceInterface-'));
$is_singleton = false;
return $instance;
