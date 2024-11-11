<?php
require_once 'PaymentMethod.php';
 class PayPalPayment implements PaymentMethod{
    public function payment(float $amount) {
        // Logic to process PayPal payment
        echo "Processing a PayPal payment of $$amount\n";
    }
 }
 
?>