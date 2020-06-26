<?php
namespace Polidog\Todo\Resource\Page;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;
use Koriym\HttpConstants\StatusCode;


class ConfirmationTodoTest extends TestCase
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
        $page = $this->resource->get('page://self/confirmationtodo', ['todo' => 'testdata']);
        $this->assertSame(201, $page->code);
    }
}
