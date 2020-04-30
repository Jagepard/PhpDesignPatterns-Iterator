<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Iterator\Tests;

use Behavioral\Iterator\{
    Item,
    Client,
    Iterator,
    ClientInterface
};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class IteratorTest extends PHPUnit_Framework_TestCase
{
    private ClientInterface $client;

    protected function setUp(): void
    {
        $this->client = new Client();
    }

    public function testAggregatesItems(): void
    {
        ob_start();
        $this->client->addItemToTheBucket(new Item("Tights", 150, "darned"));
        $employee = new Iterator($this->client->getBucket());
        $employee->iterateItems();
        $item = ob_get_clean();

        $this->assertEquals("Tights 150 darned\n", $item);
    }
}
