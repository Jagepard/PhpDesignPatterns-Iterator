<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Interface InterfaceIterator
 *
 * @package Behavioral\Iterator
 */
interface IteratorInterface
{

    /**
     * @return mixed
     */
    public function hasItem(): bool;

    public function iterateItems(): void;
}
