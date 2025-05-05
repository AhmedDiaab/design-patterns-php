<?php
require_once 'Subject.php';

class UserObserver implements ObserverInterface {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(string $message): void {
        echo "{$this->name} received message: $message\n";
    }
}
