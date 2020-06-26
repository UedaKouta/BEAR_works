<?php
namespace Polidog\Todo\Resource\App;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use BEAR\Resource\ResourceObject;
use Koriym\HttpConstants\ResponseHeader;
use Koriym\HttpConstants\StatusCode;
use PHPUnit\Framework\TestCase;

class IdTodosTest extends TestCase
{
    /**
     * @var \BEAR\Resource\ResourceInterface
     */
    private $resource;

    protected function setUp() : void
    {
      $this->resource = (new AppInjector('Polidog\Todo', 'app'))->getInstance(ResourceInterface::class);
    }
    /**
     * @depends testOnPost
     */
    public function testOnPost()
    {
        $page = $this->resource->get('page://self/idtodos', ['status' => '1']);
        $this->assertSame(200, $page->code);
    }
}
