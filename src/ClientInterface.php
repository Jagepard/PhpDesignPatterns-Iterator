<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

/**
 * Interface ClientInterface
 * @package Behavioral\Iterator
 */
interface ClientInterface
{
    /**
     * Client constructor.
     * @param Bucket $bucket
     */
    public function __construct(Bucket $bucket);

    /**
     * @return Bucket
     */
    public function getBucket(): Bucket;
}
