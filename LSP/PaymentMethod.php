<?php
interface PaymentMethod {
    public function payment(float $amount);
}
?>