<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface ItemInterface
{
    /**
     * @param  string  $name
     * @param  integer $price
     * @param  string  $description
     */
    public function __construct(string $name, int $price, string $description = "");
}
