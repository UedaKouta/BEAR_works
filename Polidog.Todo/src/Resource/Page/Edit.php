<?php

namespace Polidog\Todo\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;

class Edit extends ResourceObject
{
use ResourceInject;

/**
 * @var FormInterface
 */
public $todoEditForm;
public $targetId;
/**
 * @Inject()
 * @Named("todoEditForm=todo_edit_form")
 *
 * Index constructor.
 * @param FormInterface $todoEditForm
 */
public function __construct(FormInterface $todoEditForm)
{
    $this->todoEditForm = $todoEditForm;
}

public function onGet(string $id = null)
{
    $this['todo_edit_form'] = $this->todoEditForm;

    $this['id'] =  $id;
    $this->targetId   =  $id;
    error_log("[". date('Y-m-d H:i:s') ."ID:  ". $this->targetId. "にてゲット\n" , 3, "/Applications/MAMP/htdocs/BEAR_works/Polidog.Todo/log/debug.log");

    $this['todos'] = $this->resource
        ->get
        ->uri('app://self/todoedit')
        ->withQuery(['id' => $id])
        ->eager
        ->request();

    return $this;
}

/**
 * @param array $todo
 * @return $this
 */
public function onPost($todo = [])
{
    return $this->editTodo($todo['title']);

}

public function onFailure()
{
    $this->code = 400;
    return $this->onGet($this->targetId);
}

/**
 * @FormValidation(form="todoEditForm", onFailure="onFailure")
 * @param string $title
 * @return $this
 */
public function editTodo($title)
{

    $request = $this->resource
        ->post
        ->uri("app://self/todoedit")
        ->withQuery([
          'id' => $this->targetId,
          'title' => $title
        ])
        ->eager
        ->request();

    $this->code = $request->code;
    $this->headers['location'] = "/";
    $this['todo_edit_form'] = $this->todoEditForm;
    // return $this;
    return $this->onGet();
}

}
