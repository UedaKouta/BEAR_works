<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2016/04/28
 */

namespace Polidog\Todo\Form;


use Aura\Html\Helper\Tag;
use Ray\WebFormModule\AbstractForm;

class TodoEditForm extends AbstractForm
{

    /**
     * {@inheritdoc}
     */
    public function init()
    {

        if($_GET['id']){
            $id = $_GET['id'];
        }else{
            $id = null;
        }

        $this->setField('title')
            ->setAttribs([
                'id' => 'todo[title]',
                'name' => 'todo[title]',
                'class' => 'form-control',
                'size' => 20
            ]);

            $this->setField('id', 'hidden')
            ->setValue($id)
            ->setAttribs([
                'id' => 'todo[id]',
                'name' => 'todo[id]',
                'class' => 'form-control',
                'size' => 20,
            ]);

        $this->setField('submit', 'submit')
            ->setAttribs([
                'name' => 'submit',
                'value' => '更新',
                'class' => 'btn btn-primary'
            ]);



        // validationの設定
        $this->filter->validate('title')->is('strlenMin', 1);
        $this->filter->useFieldMessage('title', '必ず入力してください');
    }

    public function __toString()
    {

        if($_GET['id']){
            $id = $_GET['id'];
        }
        $form = $this->form([
            'method' => 'post',
            'action' => '/edit?id='.$id ,
        ]);

        /** @var Tag $tag */
        $tag  = $this->helper->get('tag');
        $form .= $tag('div', ['class' => 'form-group']);
        $form .= $this->input('title');
        $form .= $this->error('title');
        $form .= $this->helper->tag('/div') . PHP_EOL;

        $form .= $tag('div', ['class' => 'form-group']);
        $form .= $this->input('id');
        $form .= $this->error('id');
        $form .= $this->helper->tag('/div') . PHP_EOL;
        // submit
        $form .= $this->input('submit');
        $form .= $this->helper->tag('/form');

        return $form;
    }

}
