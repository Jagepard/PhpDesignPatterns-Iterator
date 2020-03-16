<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

class Client implements ClientInterface
{
    private array $bucket = [];

    /**
     * @param  ItemInterface  $item
     */
    public function addItemToTheBucket(ItemInterface $item): void
    {
        $this->bucket[] = $item;
    }

    /**
     * @return array
     */
    public function getBucket(): array
    {
        return $this->bucket;
    }
}
