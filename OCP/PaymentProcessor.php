<?php
  // Without open close principal.

  class PaymentProcessor{
    public function process($paymentType){
        if($paymentType == "Creditcard"){
            echo "Credit card payment\n";
        }
        elseif($paymentType == "Paypal"){
            echo "Paypal payment\n";
        }elseif($paymentType == "Amex"){
            echo "Amex payment\n";
        }
    }
  }
  $paymentType = new PaymentProcessor();
  $paymentType->process("Paypal");
  $paymentType->process("Amex");
?>