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

    public function takeABasket(Basket $bucket)
    {
        $this->basket = $bucket;
    }

    /**
     * @param ItemInterface $item
     */
    public function addItemToTheBasket(ItemInterface $item): void
    {
        $this->basket->addItem($item);
    }

    /**
     * @return array
     */
    public function getGoodsFromTheBasket(): array
    {
        return $this->basket->getGoods();
    }
}
