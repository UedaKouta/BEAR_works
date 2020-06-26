<?php

namespace Polidog\Todo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;

class RegistrationTodo extends ResourceObject
{
    use ResourceInject;

    public function onGet($title)
    {
        $request = $this->resource
        ->post
        ->uri("app://self/todo")
        ->withQuery(['title' => $title])
        ->eager
        ->request();

        $this->code =201;
        $this->headers['location'] = "/index";
        return $this;
    }
}
