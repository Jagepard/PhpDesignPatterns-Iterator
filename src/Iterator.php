<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Class Iterator
 *
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

    /**
     * @return Bucket
     */
    public function getBucket(): Bucket
    {
        return $this->bucket;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    /**
     * @return bool
     */
    public function hasItem(): bool
    {
        return isset($this->getBucket()->getItems()[$this->getPosition()]);
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        $item = $this->getBucket()->getItems()[$this->getPosition()];
        $this->setPosition($this->getPosition() + 1);

        return $item;
    }
}
