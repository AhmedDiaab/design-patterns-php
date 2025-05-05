<?php
require_once 'PaymentStrategy.php';
require_once 'CreditCardPayment.php';
require_once 'PayPalPayment.php';
require_once 'PaymentContext.php';

$context = new PaymentContext();
$context->setStrategy(new CreditCardPayment());
$context->executePayment(100);

$context->setStrategy(new PayPalPayment());
$context->executePayment(200);
