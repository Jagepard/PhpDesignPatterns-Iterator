<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

/**
 * Коллекция товаров. Реализует Iterator через \IteratorAggregate,
 * чтобы скрыть внутреннюю структуру массива и позволить обход через foreach.
 */
final class Basket implements \IteratorAggregate
{
    private array $goods = [];

    public function add(Item $item): void
    {
        $this->goods[] = $item;
    }

    /** @return \Traversable<Item> */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->goods);
    }
}
