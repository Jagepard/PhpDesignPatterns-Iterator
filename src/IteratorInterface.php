<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Interface InterfaceIterator
 *
 * @package Behavioral\Iterator
 */
interface IteratorInterface
{
    /**
     * Iterator constructor.
     * @param BucketInterface $bucket
     */
    public function __construct(BucketInterface $bucket);

    public function iterateItems(): void;
}
