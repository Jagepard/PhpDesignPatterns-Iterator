<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

/**
 * Class Basket
 * @package Behavioral\Employee
 */
class Basket implements BasketInterface
{
    private array $goods;

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void
    {
        $this->goods[] = $item;
    }

    /**
     * @return array
     */
    public function getGoods(): array
    {
        return $this->goods;
    }
}
