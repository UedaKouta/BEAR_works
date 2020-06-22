<?php
namespace Polidog\Todo\Resource\Page;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;
use Koriym\HttpConstants\StatusCode;


class IndexTest extends TestCase
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
        $page = $this->resource->get('page://self/index', ['status' => '1']);
        $this->assertSame(200, $page->code);
    }

    public function testCreateTodo()
    {
        $page = $this->resource->get('page://self/index', ['title' => 'testdata']);
        $this->assertSame(200, $page->code);
    }

}
