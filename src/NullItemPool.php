<?php

namespace CL\PsrCache;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class NullItemPool implements CacheItemPoolInterface
{
    public function getItem($key)
    {
        return new NullItem($key);
    }

    public function clear()
    {
        return true;
    }
}
