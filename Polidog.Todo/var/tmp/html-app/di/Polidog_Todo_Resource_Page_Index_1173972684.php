<?php

namespace Polidog\Todo\Resource\Page;

use Ray\Aop\WeavedInterface;
use Ray\Aop\ReflectiveMethodInvocation as Invocation;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;
class Index_1173972684 extends \Polidog\Todo\Resource\Page\Index implements WeavedInterface
{
    public $bind;
    public $bindings = [];
    public $methodAnnotations = 'a:4:{s:11:"__construct";a:2:{i:0;O:16:"Ray\\Di\\Di\\Inject":1:{s:8:"optional";b:0;}i:1;O:15:"Ray\\Di\\Di\\Named":1:{s:5:"value";s:18:"todoForm=todo_form";}}s:10:"createTodo";a:1:{i:0;O:43:"Ray\\WebFormModule\\Annotation\\FormValidation":3:{s:8:"antiCsrf";b:0;s:9:"onFailure";s:9:"onFailure";s:4:"form";s:8:"todoForm";}}s:11:"setRenderer";a:1:{i:0;O:16:"Ray\\Di\\Di\\Inject":1:{s:8:"optional";b:1;}}s:11:"setResource";a:1:{i:0;O:16:"Ray\\Di\\Di\\Inject":1:{s:8:"optional";b:0;}}}';
    public $classAnnotations = 'a:0:{}';
    private $isAspect = true;
    /**
     * @FormValidation(form="todoForm", onFailure="onFailure")
     * @param string $title
     * @return $this
     */
    public function createTodo($title)
    {
        if (!$this->isAspect) {
            $this->isAspect = true;
            return call_user_func_array([$this, 'parent::' . __FUNCTION__], func_get_args());
        }
        $this->isAspect = false;
        $result = (new Invocation($this, __FUNCTION__, func_get_args(), $this->bindings[__FUNCTION__]))->proceed();
        $this->isAspect = true;
        return $result;
    }
}
