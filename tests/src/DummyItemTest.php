<?php

namespace CL\PsrCache\Test;

use CL\PsrCache\DummyPool;
use CL\PsrCache\DummyItem;

/**
 * @coversDefaultClass CL\PsrCache\DummyItem
 */
class DummyItemTest extends AbstractTestCase
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
        $item = new DummyItem('key1');

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
