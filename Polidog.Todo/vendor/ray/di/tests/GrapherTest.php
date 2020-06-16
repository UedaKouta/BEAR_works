<?php

declare(strict_types=1);

namespace Ray\Di;

use PHPUnit\Framework\TestCase;

class GrapherTest extends TestCase
{
    public function testNew()
    {
        $grapher = new Grapher(new FakeInstanceBindModule, __DIR__ . '/tmp');
        $this->assertInstanceOf(Grapher::class, $grapher);
    }

    public function testGetInstanceWithArgs()
    {
        $grapher = new Grapher(new FakeUntargetModule, __DIR__ . '/tmp');
        $instance = $grapher->newInstanceArgs(FakeUntargetChild::class, ['1']);
        $this->assertInstanceOf(FakeUntargetChild::class, $instance);
        $this->assertSame('1', $instance->val);
    }

    public function testAopClassAutoloader()
    {
        passthru('php ' . __DIR__ . '/script/grapher.php');
        $cacheFile = __DIR__ . '/script/grapher.php.txt';
        $cache = file_get_contents($cacheFile);
        if (! is_string($cache)) {
            throw new \LogicException;
        }
        /* @var Grapher $grapher */
        $grapher = unserialize($cache);
        $this->assertInstanceOf(Grapher::class, $grapher);

        $instance = $grapher->newInstanceArgs(FakeAopInterface::class, ['a']);
        /* @var $instance FakeAopGrapher */
        $result = $instance->returnSame(2);
        $this->assertSame(4, $result);
        $this->assertSame('a', $instance->a);
    }
}
