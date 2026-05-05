<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

interface ClientInterface
{
    public function takeBasket(Basket $basket): void;
    public function addToTheBasket(Item $item): void;
    public function getBasket(): Basket;
}
