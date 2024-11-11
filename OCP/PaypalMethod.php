<?php
// Open close principle
require_once 'PaymentMethod.php';
class PaypalMethod implements PaymentMethod{
    public function payment($amount){
            echo "paypal Payment: $amount \n";
    }
 }
 $paypal = new PaypalMethod();
 $paypal->payment(40000);
?>