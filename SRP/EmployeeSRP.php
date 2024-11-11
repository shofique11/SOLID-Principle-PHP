<?php
// Single Responsibility Principle
class EmployeeSRP{
    public function createEmployee($data){
        echo "Name: ".$data['name']. " Email: ".$data['email']."\n";
    }
}
?>