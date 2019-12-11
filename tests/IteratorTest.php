<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator\Tests;

use Behavioral\Iterator\Item;
use Behavioral\Iterator\Client;
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
        $this->client = new Client();
    }

    public function testAggregatesItems(): void
    {
        ob_start();
        $this->client->addItemToTheBucket(new Item('Колготки', 150, 'штопаные'));
        $employee = new Iterator($this->client->getBucket());
        $employee->iterateItems();
        $item = ob_get_clean();

        $this->assertEquals($item, "Колготки 150 руб. штопаные\n");
    }
}
