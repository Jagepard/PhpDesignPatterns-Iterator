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
use Behavioral\Iterator\ClientInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class IteratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ClientInterface
     */
    private $client;

    protected function setUp(): void
    {
        $this->client = new Client(new Bucket());
    }

    public function testInstance(): void
    {
        $this->assertInstanceOf(Client::class, $this->getClient());
        $this->assertInstanceOf(Bucket::class, $this->getClient()->getBucket());
    }

    public function testAggregatesItems(): void
    {
        ob_start();
        $this->getClient()->getBucket()->addItem(new Item('Колготки', 150, 'штопаные'));
        $employee = new Iterator($this->getClient()->getBucket());
        $employee->iterateItems();
        $item = ob_get_clean();

        $this->assertEquals($item, "Колготки 150 руб. штопаные\n");
    }

    /**
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }
}
