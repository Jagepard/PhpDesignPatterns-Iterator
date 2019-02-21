<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Interface BucketInterface
 * @package Behavioral\Iterator
 */
interface BucketInterface
{
    /**
     * @return array
     */
    public function getItems(): array;

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void;
}
