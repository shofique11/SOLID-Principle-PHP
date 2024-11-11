<?php 
// Single Responsibility Principle
class Salary{
    public function makeSalary($salary){
        echo "Basic: ". $salary['basic'] ." House-Rental: ".$salary['house_rental']." Treatment: ".$salary['treatment'];
  }
}

?>