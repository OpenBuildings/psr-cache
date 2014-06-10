<?php

namespace CL\PsrCache\Test;

use CL\PsrCache\DummyPool;
use CL\PsrCache\DummyItem;

/**
 * @coversDefaultClass CL\PsrCache\DummyPool
 */
class DummyPoolTest extends AbstractTestCase
{
    /**
     * @covers ::__construct
     * @covers ::getItem
     * @covers ::clear
     */
    public function testTest()
    {
        $pool = new DummyPool();

        $item = $pool->getItem('item');

        $this->assertEquals(new DummyItem('item'), $item);

        $pool->clear();
    }
}
