<?php

namespace CL\PsrCache;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
interface CachePoolInterface
{
    public function getItem($key);

    public function clear();
}
