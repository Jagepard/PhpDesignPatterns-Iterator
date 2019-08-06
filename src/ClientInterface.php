<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface ClientInterface
{
    /**
     * ClientInterface constructor.
     * @param BucketInterface $bucket
     */
    public function __construct(BucketInterface $bucket);

    /**
     * @return BucketInterface
     */
    public function getBucket(): BucketInterface;
}
