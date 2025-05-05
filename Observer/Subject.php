<?php
interface ObserverInterface {
    public function update(string $message): void;
}

class Subject {
    private array $observers = [];

    public function attach(ObserverInterface $observer): void {
        $this->observers[] = $observer;
    }

    public function notify(string $message): void {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}
