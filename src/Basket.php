<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

class Basket implements BasketInterface
{
    private array $goods;

    public function addItem(ItemInterface $item): void
    {
        $this->goods[] = $item;
    }

    public function getGoods(): array
    {
        return $this->goods;
    }
}
