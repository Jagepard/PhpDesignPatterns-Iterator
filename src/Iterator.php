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
    private $bucket;
    /**
     * @var int
     */
    private $position = 0;

    /**
     * Iterator constructor.
     * @param BucketInterface $bucket
     */
    public function __construct(BucketInterface $bucket)
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
