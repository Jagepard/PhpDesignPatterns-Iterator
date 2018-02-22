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
     * @var AggregateInterface
     */
    protected $aggregate;

    /**
     * Client constructor.
     *
     * @param AggregateInterface $aggregate
     */
    public function __construct(AggregateInterface $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    /**
     * @return AggregateInterface
     */
    public function getAggregate(): AggregateInterface
    {
        return $this->aggregate;
    }

    public function printAggregatesItems(): void
    {
        $this->printIteratorItems($this->getAggregate()->createIterator());
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
