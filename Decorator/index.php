<?php
require_once 'SimpleCoffee.php';
require_once 'MilkDecorator.php';
require_once 'SugarDecorator.php';

$coffee = new SimpleCoffee();
$coffee = new MilkDecorator($coffee);
$coffee = new SugarDecorator($coffee);

echo $coffee->getDescription() . " costs $" . $coffee->getCost() . "\n";
