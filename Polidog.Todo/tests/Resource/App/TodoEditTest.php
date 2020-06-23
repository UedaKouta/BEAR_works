<?php
namespace Polidog\Todo\Resource\App;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use BEAR\Resource\ResourceObject;
use Koriym\HttpConstants\ResponseHeader;
use Koriym\HttpConstants\StatusCode;
use PHPUnit\Framework\TestCase;

class TodoEditTest extends TestCase
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
    public function testOnPost(ResourceObject $ro)
    {
      $ro = $this->resource->get('app://self/todoedit', ['id' => '2']);
      $this->assertSame(200, $ro->code);

      return $ro;
    }

}
