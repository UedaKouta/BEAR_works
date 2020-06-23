<?php
namespace Polidog\Todo\Resource\Page;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;
use Koriym\HttpConstants\StatusCode;


class EditTest extends TestCase
{
    /**
     * @var ResourceInterface
     */
    private $resource;

    protected function setUp() : void
    {
        $this->resource = (new AppInjector('Polidog\Todo', 'app'))->getInstance(ResourceInterface::class);
    }

    public function testOnGet()
    {
        $page = $this->resource->get('page://self/edit', ['id' => '2']);
        $this->assertSame(200, $page->code);
    }

    public function testEditTodo()
    {
        $page = $this->resource->get('page://self/edit', ['title' => 'testdataEdit','id'=> '2']);
        $this->assertSame(200, $page->code);
    }

}
