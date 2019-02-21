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
class Item implements ItemInterface
{
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $price;
    /**
     * @var string
     */
    private $description;

    /**
     * Item constructor.
     * @param string $name
     * @param int    $price
     * @param string $description
     */
    public function __construct(string $name, int $price, string $description = '')
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
