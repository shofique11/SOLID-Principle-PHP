<?php
// A class should not be forced to implement interfaces it does not use. This helps create smaller, more specific interfaces.
// Without ISP
require_once 'WorkerInterface.php';

class Employee implements WorkerInterface{
    public function work(){
            echo "Join the employee as Programmer \n";
    }
    public function manage(){
            // no code no taske
    }
}
$employee = new Employee();
$employee->work();
?>