<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

class Iterator implements InterfaceIterator
{

    protected $items = [];

    public $position = 0;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getItem($item)
    {
        return $this->items[$item];
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function hasNext()
    {
        return ($this->getPosition() >= count($this->getItems()) || count($this->getItems()) == 0) ? false : true;
    }

    public function next()
    {
        $item = $this->getItem($this->getPosition());
        $this->setPosition($this->getPosition() + 1);

        return $item;
    }
}
