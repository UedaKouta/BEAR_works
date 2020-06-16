<?php

declare(strict_types=1);

namespace BEAR\Package\Provide\Router;

use PHPUnit\Framework\TestCase;

class WebRouterTest extends TestCase
{
    /**
     * @var WebRouter
     */
    private $router;

    protected function setUp() : void
    {
        parent::setUp();
        $this->router = new WebRouter('page://self', new HttpMethodParams);
    }

    public function testMatchRoot()
    {
        $global = [
            '_GET' => [],
            '_POST' => []
        ];
        $server = [
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/'
        ];
        $request = $this->router->match($global, $server);
        $this->assertSame('get', $request->method);
        $this->assertSame('page://self/', $request->path);
        $this->assertSame([], $request->query);
    }

    public function testMatchWithQuery()
    {
        $global = [
            '_GET' => [
                'id' => 1
            ],
            '_POST' => []
        ];
        $server = [
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/?id=1'
        ];
        $request = $this->router->match($global, $server);
        $this->assertSame('get', $request->method);
        $this->assertSame('page://self/', $request->path);
        $this->assertSame(['id' => 1], $request->query);
    }

    public function testGenerate()
    {
        $actual = $this->router->generate('', []);
        $this->assertFalse((bool) $actual);
    }
}