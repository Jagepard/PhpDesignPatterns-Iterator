<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Employee implements IteratorInterface
{
    public function iterateItems(array $goods): void
    {
        if (count($goods) === 0) {
            throw new \InvalidArgumentException("Basket is empty");
        }

        for ($i = 0; isset($goods[$i]); $i++) {
            $goods[$i]->printItem();
        }
    }
}
