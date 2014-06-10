<?php

namespace CL\PsrCache\Test;

use CL\PsrCache\NullItemPool;
use CL\PsrCache\NullItem;

/**
 * @coversDefaultClass CL\PsrCache\NullItemPool
 */
class NullItemPoolTest extends AbstractTestCase
{
    /**
     * @covers ::__construct
     * @covers ::getItem
     * @covers ::clear
     */
    public function testTest()
    {
        $pool = new NullItemPool();

        $this->assertInstanceOf('CL\PsrCache\CacheItemPoolInterface', $pool);

        $item = $pool->getItem('item');

        $this->assertEquals(new NullItem('item'), $item);

        $pool->clear();
    }
}
