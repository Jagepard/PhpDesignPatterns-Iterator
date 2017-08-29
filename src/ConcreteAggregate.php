<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Class ConcreteAggregate
 *
 * @package Behavioral\Iterator
 */
class ConcreteAggregate implements InterfaceAggregate
{

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @return Iterator
     */
    public function createIterator(): Iterator
    {
        return new Iterator($this->getItems());
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }
}