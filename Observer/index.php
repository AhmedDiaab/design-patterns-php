<?php
require_once 'Subject.php';
require_once 'UserObserver.php';

$subject = new Subject();
$observer1 = new UserObserver("Observer A");
$observer2 = new UserObserver("Observer B");

$subject->attach($observer1);
$subject->attach($observer2);

$subject->notify("New update available.");
