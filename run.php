<?php

require_once 'vendor/autoload.php';

$client = new \Behavioral\Iterator\Client(new \Behavioral\Iterator\ConcreteAggregate());

$client->getAggregate()->addItem(new \Behavioral\Iterator\Item('Колготки', 150, 'штопаные'));
$client->getAggregate()->addItem(new \Behavioral\Iterator\Item('Мясо', 250, 'тухлое'));
$client->getAggregate()->addItem(new \Behavioral\Iterator\Item('Батон', 40));

$client->printAggregatesItems();
