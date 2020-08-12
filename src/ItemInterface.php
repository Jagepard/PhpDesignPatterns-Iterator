<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface ItemInterface
{
    public function __construct(string $name, int $price, string $description = "");
}
