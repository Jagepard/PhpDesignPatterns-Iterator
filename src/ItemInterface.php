<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface ItemInterface
{
    /**
     * Item constructor.
     * @param  string  $name
     * @param  int  $price
     * @param  string  $description
     */
    public function __construct(string $name, int $price, string $description = "");
}
