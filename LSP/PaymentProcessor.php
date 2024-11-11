<?php
require_once 'PaymentMethod.php';
require_once 'CreditCardPayment.php';
require_once 'PayPalPayment.php';
class PaymentProcessor{
    public function processPayment(PaymentMethod $paymentMethod, float $amount){
        $paymentMethod->payment($amount);
    }
}

$processor = new PaymentProcessor();

// Process a credit card payment
$creditCardPayment = new CreditCardPayment();
$processor->processPayment($creditCardPayment, 10000.0);

// Process a PayPal payment
$payPalPayment = new PayPalPayment();
$processor->processPayment($payPalPayment, 50000.0);

?>