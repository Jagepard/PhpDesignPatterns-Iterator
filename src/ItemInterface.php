<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Interface ItemInterface
 * @package Behavioral\Iterator
 */
interface ItemInterface
{
    /**
     * Item constructor.
     * @param string $name
     * @param int    $price
     * @param string $description
     */
    public function __construct(string $name, int $price, string $description = '');

    public function printItem(): void;
}
