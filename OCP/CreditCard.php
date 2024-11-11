<?php
// Open close principle
require_once 'PaymentMethod.php';
class CreditCard implements PaymentMethod{
    public function payment($amount)
    {
        echo "Credit card payment: $amount \n";
    }
}
$creditcard = new CreditCard();
$creditcard->payment(800000);
?>