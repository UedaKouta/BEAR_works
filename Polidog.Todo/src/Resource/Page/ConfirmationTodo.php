<?php

namespace Polidog\Todo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;

class ConfirmationTodo extends ResourceObject
{
use ResourceInject;

public function onGet($todo = [])
{
    $this['todos'] = $this->resource
        ->get
        ->uri('app://self/idtodos')
        ->withQuery(['status' => 1])
        ->eager
        ->request();

        $this['title'] =  $todo['title'];

        return $this;
    }
}
