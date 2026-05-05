<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

final class Item
{
    public function __construct(private string $name, private int $price, private string $description = ""){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
