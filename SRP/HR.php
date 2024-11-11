<?php
require_once 'EmployeeSRP.php';
require_once 'Salary.php';
 class HR{
    public function __construct(){
        echo "HR created employee and make salary\n";
    }
 }
$EmployeeSRP = new EmployeeSRP();
$EmployeeSRP->createEmployee(["name" =>"Shofique", "email" =>"shofique@gmail.com"]);
$salary = new Salary();
$salary->makeSalary(["basic" =>60000,"house_rental" =>15000,"treatment" =>20000]);
?>