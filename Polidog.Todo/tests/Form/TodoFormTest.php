<?php
namespace Polidog\Todo\Form;

use BEAR\Package\AppInjector;
use PHPUnit\Framework\TestCase;

class TodoFormTest extends TestCase
{
    /**
     * @var TodoForm
     */
    private $form;

    protected function setUp() : void
    {
        $this->form = (new AppInjector('Polidog\Todo', 'html-app'))->getInstance(TodoForm::class);
    }

    public function testFailedEmpty()
    {
        $submit = [];
        $isValid = $this->form->apply($submit);
        $this->assertFalse($isValid);
    }

    public function testFailedEmptyVale()
    {
        $submit = ['title' => ''];
        $isValid = $this->form->apply($submit);
        $this->assertFalse($isValid);
        $msg = $this->form->getFailureMessages();
        $expected = ['title' => ['必ず入力してください']];
        $this->assertSame($expected, $msg);
    }

    public function testOk()
    {
        $submit = ['title' => 'test'];
        $isValid = $this->form->apply($submit);
        $this->assertTrue($isValid);
    }

    public function testFormView()
    {
        $formHtml = (string) $this->form;
        $expected = '<form method="get" action="/ConfirmationTodo" enctype="multipart/form-data" name="intodo1"><div class="form-group"><input id="title1" type="text" name="todo[title]" class="form-control" value="" size="20" />
</div>
<input type="submit" name="submit" value="確認" class="btn btn-primary" onclick="return checkForm();" />
</form>';
        $this->assertSame($expected, $formHtml);
    }
}
