<?php

namespace CL\PsrCache\Test;

use CL\PsrCache\DummyItemPool;
use CL\PsrCache\DummyItem;

/**
 * @coversDefaultClass CL\PsrCache\DummyItemPool
 */
class DummyItemPoolTest extends AbstractTestCase
{
    /**
     * @covers ::__construct
     * @covers ::getItem
     * @covers ::clear
     */
    public function testTest()
    {
        $pool = new DummyItemPool();

        $this->assertInstanceOf('CL\PsrCache\CacheItemPoolInterface', $pool);

        $item = $pool->getItem('item');

        $this->assertEquals(new DummyItem('item'), $item);

        $pool->clear();
    }
}
