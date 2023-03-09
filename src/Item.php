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

    /**
     * Sets the name, price and description of the product
     * ---------------------------------------------------
     * Устанавливает наименование, цену и описание товара
     *
     * @param  string  $name
     * @param  integer $price
     * @param  string  $description
     */
    public function __construct(string $name, int $price, string $description = "")
    {
        $this->name        = $name;
        $this->price       = $price;
        $this->description = $description;
    }

    /**
     * Displays product information
     * ----------------------------
     * Выводит информацию о товаре
     *
     * @return void
     */
    public function printItem(): void
    {
        printf("%s %s %s\n", $this->name, $this->price, $this->description);
    }
}
