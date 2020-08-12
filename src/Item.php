<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Item implements ItemInterface
{
    private string $name;
    private int    $price;
    private string $description;

    public function __construct(string $name, int $price, string $description = "")
    {
        $this->name        = $name;
        $this->price       = $price;
        $this->description = $description;
    }

    public function printItem(): void
    {
        printf("%s %s %s\n", $this->name, $this->price, $this->description);
    }
}
