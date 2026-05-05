<?php

declare(strict_types=1);

namespace Behavioral\Iterator;

/**
 * Сотрудник, обрабатывающий товары из любой коллекции,
 * реализующей \Traversable (паттерн Iterator).
 */
final class Employee implements EmployeeInterface
{
    /**
     * @param \Traversable<Item> $basket
     */
    public function iterateItems(\Traversable $basket): void
    {
        // PHP автоматически вызывает getIterator() у объектов, реализующих \IteratorAggregate
        foreach ($basket as $item) {
            echo "{$item->getName()} {$item->getPrice()}" . 
                 ($item->getDescription() ? " {$item->getDescription()}\n" : "\n");
        }
    }
}
