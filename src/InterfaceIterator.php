<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Iterator;

/**
 * Interface InterfaceIterator
 *
 * @package Behavioral\Iterator
 */
interface InterfaceIterator
{

    /**
     * @return mixed
     */
    public function hasNext();

    /**
     * @return mixed
     */
    public function next();
}