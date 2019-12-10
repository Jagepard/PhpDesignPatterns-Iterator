<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator;

interface ClientInterface
{
    /**
     * @return array
     */
    public function getBucket(): array;
}
