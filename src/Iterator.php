<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Class Iterator
 * @package Behavioral\Iterator
 */
class Iterator implements IteratorInterface
{

    /**
     * @var Bucket
     */
    protected $bucket;
    /**
     * @var int
     */
    protected $position = 0;

    /**
     * Iterator constructor.
     * @param Bucket $bucket
     */
    public function __construct(Bucket $bucket)
    {
        $this->bucket = $bucket;
    }

    public function iterateItems(): void
    {
        while (isset($this->bucket->getItems()[$this->position])) {
            $this->bucket->getItems()[$this->position]->printItem();
            $this->position++;
        }
    }
}
