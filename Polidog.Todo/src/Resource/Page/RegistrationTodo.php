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

// return $this;


return $this;
// header( "Location:/" ) ;

}

// /**
//  * @param array $todo
//  * @return $this
//  */
// public function onPost($todo = [])
// {
//     return $this->createTodo($todo['title']);
// }

// public function onFailure()
// {
//     $this->code = 400;
//     return $this->onGet();
// }

// /**
//  * @FormValidation(form="todoForm", onFailure="onFailure")
//  * @param string $title
//  * @return $this
//  */
// public function createTodo($title)
// {

//     $request = $this->resource
//         ->post
//         ->uri("app://self/todo")
//         ->withQuery(['title' => $title])
//         ->eager
//         ->request();

//     $this->code = $request->code;
//     $this->headers['location'] = "/";
//     $this['todo_form'] = $this->todoForm;
//     // return $this;
//     return $this->onGet();
// }

}
