<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Client implements ClientInterface
{
    private Basket $basket;

    /**
     * Adds a shopping cart
     * --------------------
     * Добавляет корзину
     *
     * @param  Basket $bucket
     * @return void
     */
    public function takeBasket(Basket $bucket)
    {
        $this->basket = $bucket;
    }

    /**
     * Adds an item to the cart
     * -------------------------
     * Добавляет товар в корзину
     *
     * @param  ItemInterface $item
     * @return void
     */
    public function addToTheBasket(ItemInterface $item): void
    {
        $this->basket->addItem($item);
    }

    /**
     * Gets all items from the cart
     * ------------------------------
     * Получает все товары из корзины
     *
     * @return array
     */
    public function getGoodsFromTheBasket(): array
    {
        return $this->basket->getGoods();
    }
}
