<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Class Iterator
 *
 * @package Behavioral\Iterator
 */
class Iterator implements InterfaceIterator
{

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * Iterator constructor.
     *
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param int $item
     *
     * @return Item
     */
    public function getItem(int $item): Item
    {
        return $this->items[$item];
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    /**
     * @return bool
     */
    public function hasNext(): bool
    {
        return ($this->getPosition() >= count($this->getItems()) || count($this->getItems()) == 0) ? false : true;
    }

    /**
     * @return Item
     */
    public function next(): Item
    {
        $item = $this->getItem($this->getPosition());
        $this->setPosition($this->getPosition() + 1);

        return $item;
    }
}
