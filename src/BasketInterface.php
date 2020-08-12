<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface BasketInterface
{
    public function addItem(ItemInterface $item): void;
    public function getGoods(): array;
}
