<?php
require_once 'PaymentMethod.php';
class CreditCardPayment implements PaymentMethod {

    public function payment(float $amount) {
        // Logic to process credit card payment
        echo "Processing a credit card payment of $$amount\n";
    }
}

?>