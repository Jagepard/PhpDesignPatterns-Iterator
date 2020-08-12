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

    public function takeBasket(Basket $bucket)
    {
        $this->basket = $bucket;
    }

    public function addToTheBasket(ItemInterface $item): void
    {
        $this->basket->addItem($item);
    }

    public function getGoodsFromTheBasket(): array
    {
        return $this->basket->getGoods();
    }
}
