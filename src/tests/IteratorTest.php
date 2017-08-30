<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class IteratorTest extends PHPUnit_Framework_TestCase
{

    protected $client;

    protected function setUp(): void
    {
        $this->client = new \Behavioral\Iterator\Client(new \Behavioral\Iterator\ConcreteAggregate());
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(\Behavioral\Iterator\Client::class, $this->getClient());
        $this->assertInstanceOf(\Behavioral\Iterator\AggregateInterface::class, $this->getClient()->getAggregate());
    }

    public function testAggregatesItems(): void
    {
        ob_start();
        $this->getClient()->getAggregate()->addItem(new \Behavioral\Iterator\Item('Колготки', 150, 'штопаные'));
        $this->getClient()->printAggregatesItems();
        $item = ob_get_clean();

        $this->assertEquals($item, "Колготки 150 руб. штопаные\n");
    }

    /**
     * @return mixed
     */
    public function getClient(): \Behavioral\Iterator\Client
    {
        return $this->client;
    }
}