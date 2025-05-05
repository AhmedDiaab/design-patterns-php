<?php
require_once 'Logger.php';

$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();

$logger1->log("Singleton instance works.");

echo $logger1 === $logger2 ? "Same instance\n" : "Different instances\n";
