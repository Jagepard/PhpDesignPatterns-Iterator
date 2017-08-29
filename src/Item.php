<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

class Item
{

    protected $price;

    protected $name;

    protected $description;

    public function __construct($name, $price, $description = '')
    {
        $this->name        = $name;
        $this->price       = $price;
        $this->description = $description;
    }

    public function printItem()
    {
        print $this->getName() . ' ' . $this->getPrice() . ' руб. ' . $this->getDescription() . "\n";
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
}