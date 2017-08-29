<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Class Client
 *
 * @package Behavioral\Iterator
 */
class Client
{

    /**
     * @var InterfaceAggregate
     */
    protected $aggregate;

    /**
     * Client constructor.
     *
     * @param InterfaceAggregate $aggregate
     */
    public function __construct(InterfaceAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    /**
     * @return InterfaceAggregate
     */
    public function getAggregate(): InterfaceAggregate
    {
        return $this->aggregate;
    }

    public function printAggregatesItems(): void
    {
        $this->printIteratorItems($this->aggregate->createIterator());
    }

    /**
     * @param Iterator $iterator
     */
    protected function printIteratorItems(Iterator $iterator): void
    {
        while ($iterator->hasNext()) {
            $item = $iterator->next();
            $item->printItem();
        }
    }
}
