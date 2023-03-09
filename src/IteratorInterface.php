<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface IteratorInterface
{
    /**
     * @param  array $goods
     * @return void
     */
    public function iterateItems(array $goods): void;
}
