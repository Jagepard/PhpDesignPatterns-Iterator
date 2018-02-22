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
     * @var Bucket
     */
    protected $bucket;

    /**
     * Client constructor.
     * @param Bucket $bucket
     */
    public function __construct(Bucket $bucket)
    {
        $this->bucket = $bucket;
    }

    /**
     * @return Bucket
     */
    public function getBucket(): Bucket
    {
        return $this->bucket;
    }

    public function getAllGoods(): void
    {
        $this->iterateItems(new Iterator($this->getBucket()));
    }

    /**
     * @param Iterator $iterator
     */
    protected function iterateItems(Iterator $iterator): void
    {
        while ($iterator->hasItem()) {
            $item = $iterator->getItem();
            $item->printItem();
        }
    }
}
