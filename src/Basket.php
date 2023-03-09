<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

class Basket implements BasketInterface
{
    private array $goods;

    /**
     * Adds an item to the cart
     * -------------------------
     * Добавляет товар в корзину
     *
     * @param  ItemInterface $item
     * @return void
     */
    public function addItem(ItemInterface $item): void
    {
        $this->goods[] = $item;
    }

    /**
     * Gets all items from the cart
     * ------------------------------
     * Получает все товары из корзины
     *
     * @return array
     */
    public function getGoods(): array
    {
        return $this->goods;
    }
}
