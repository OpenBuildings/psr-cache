<?php

namespace CL\PsrCache;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class DummyPool implements CachePoolInterface
{
    public function __construct()
    {
    }


    public function getItem($key)
    {
        return new DummyItem($key);
    }

    public function clear()
    {
    }
}
