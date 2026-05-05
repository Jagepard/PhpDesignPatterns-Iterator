<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

final class Client implements ClientInterface
{
    private Basket $basket;

    public function takeBasket(Basket $basket): void
    {
        $this->basket = $basket;
    }

    public function addToTheBasket(Item $item): void
    {
        $this->basket->add($item);
    }

    public function getBasket(): Basket
    {
        return $this->basket;
    }
}
