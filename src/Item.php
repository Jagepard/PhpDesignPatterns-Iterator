<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Class Item
 * @package Behavioral\Iterator
 */
class Item
{

    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $price;
    /**
     * @var string
     */
    protected $description;

    /**
     * Item constructor.
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
        printf("%s %s руб. %s\n",  $this->name , $this->price , $this->description);
    }
}
