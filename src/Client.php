<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Client implements ClientInterface
{
    /**
     * @var Bucket
     */
    private $bucket;

    /**
     * Client constructor.
     * @param BucketInterface $bucket
     */
    public function __construct(BucketInterface $bucket)
    {
        $this->bucket = $bucket;
    }

    /**
     * @return BucketInterface
     */
    public function getBucket(): BucketInterface
    {
        return $this->bucket;
    }
}
