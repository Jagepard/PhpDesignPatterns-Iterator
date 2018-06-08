<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator\Tests;

use Behavioral\Iterator\Item;
use Behavioral\Iterator\Client;
use Behavioral\Iterator\Bucket;
use Behavioral\Iterator\Iterator;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class IteratorTest
 * @package Behavioral\Iterator\Tests
 */
class IteratorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Client
     */
    protected $client;

    protected function setUp(): void
    {
        $this->client = new Client(new Bucket());
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Client::class, $this->client);
        $this->assertInstanceOf(Bucket::class, $this->client->getBucket());
    }

    public function testAggregatesItems(): void
    {
        ob_start();
        $this->client->getBucket()->addItem(new Item('Колготки', 150, 'штопаные'));
        $employee = new Iterator($this->client->getBucket());
        $employee->iterateItems();
        $item = ob_get_clean();

        $this->assertEquals($item, "Колготки 150 руб. штопаные\n");
    }
}
