<?php
require_once 'DatabaseConnection.php';
class Mysql implements DatabaseConnection{
    public function connection()
    {
        echo "Mysql database connection";
    }
}
?>