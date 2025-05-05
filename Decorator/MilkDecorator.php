<?php
require_once 'CoffeeDecorator.php';

class MilkDecorator extends CoffeeDecorator {
    public function getCost(): float {
        return $this->coffee->getCost() + 1.5;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ", Milk";
    }
}
