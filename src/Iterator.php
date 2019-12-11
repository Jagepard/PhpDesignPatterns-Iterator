<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Iterator implements IteratorInterface
{
    /**
     * @var array
     */
    private $bucket;

    /**
     * Iterator constructor.
     * @param  array  $bucket
     */
    public function __construct(array $bucket)
    {
        $this->bucket = $bucket;
    }

    public function iterateItems(): void
    {
        if (count($this->bucket) === 0) {
            throw new \InvalidArgumentException('Bucket is empty');
        }

        for ($i = 0; isset($this->bucket[$i]); $i++) {
            $this->bucket[$i]->printItem();
        }
    }
}
