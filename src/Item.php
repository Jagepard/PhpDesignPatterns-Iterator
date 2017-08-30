<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Class Item
 *
 * @package Behavioral\Iterator
 */
class Item
{

    /**
     * @var
     */
    protected $price;

    /**
     * @var
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * Item constructor.
     *
     * @param        $name
     * @param        $price
     * @param string $description
     */
    public function __construct($name, $price, $description = '')
    {
        $this->name        = $name;
        $this->price       = $price;
        $this->description = $description;
    }

    public function printItem(): void
    {
        print $this->getName() . ' ' . $this->getPrice() . ' руб. ' . $this->getDescription() . "\n";
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
