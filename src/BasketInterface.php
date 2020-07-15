<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface BasketInterface
{
    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void;

    /**
     * @return array
     */
    public function getGoods(): array;
}
