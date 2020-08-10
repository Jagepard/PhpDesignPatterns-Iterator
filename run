#!/usr/bin/env php
<?php

namespace Behavioral\Iterator;

require_once "vendor/autoload.php";

$employee = new Employee();
$client   = new Client();

$client->takeBasket(new Basket());
$client->addToTheBasket(new Item("Tights", 150, "darned"));
$client->addToTheBasket(new Item("Meat", 250, "rotten"));
$client->addToTheBasket(new Item("Bread", 40));

try {
    $employee->iterateItems($client->getGoodsFromTheBasket());
} catch (\Exception $e) {
    echo "Caught exception: {$e->getMessage()}\n";
}
