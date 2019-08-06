<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Bucket implements BucketInterface
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void
    {
        $this->items[] = $item;
    }
}
