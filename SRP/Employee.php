<?php
// Without Single Responsibility Principal Component
 class Employee{
  
    public function createEmployee($data){
        echo "Name: ".$data['name']. " Email: ".$data['email']."\n";
    }

    public function makeSalary($salary){
            echo "Basic: ". $salary['basic'] ." House-Rental: ".$salary['house_rental']." Treatment: ".$salary['treatment'];
    }
 }

 $employee1 = new Employee();
 $employee1->createEmployee(["name" =>"Shofique", "email" =>"shofique@gmail.com"]);
 $employee1->makeSalary(["basic" =>60000,"house_rental" =>15000,"treatment" =>20000]);
?>