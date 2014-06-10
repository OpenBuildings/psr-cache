<?php

namespace CL\PsrCache\Test;

use CL\PsrCache\NullItemPool;
use CL\PsrCache\NullItem;

/**
 * @coversDefaultClass CL\PsrCache\NullItem
 */
class NullItemTest extends AbstractTestCase
{
    /**
     * @covers ::__construct
     * @covers ::getKey
     * @covers ::isHit
     * @covers ::exists
     * @covers ::get
     * @covers ::set
     * @covers ::save
     * @covers ::delete
     */
    public function testTest()
    {
        $item = new NullItem('key1');

        $this->assertInstanceOf('CL\PsrCache\CacheItemInterface', $item);

        $this->assertEquals('key1', $item->getKey());
        $this->assertFalse($item->isHit());
        $this->assertFalse($item->exists());

        $this->assertNull($item->get());

        $item->set('some val', 123);

        $this->assertSame('some val', $item->get());

        $this->assertTrue($item->save());
        $this->assertTrue($item->delete());
    }
}
