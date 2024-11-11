<?php
// Open close principle
require_once 'PaymentMethod.php';
class AmaxMethod implements PaymentMethod{
    public function payment($amount)
    {
        echo "Amax Payment: $amount \n";
    }
}
$amax = new AmaxMethod();
$amax->payment(50000);
?>