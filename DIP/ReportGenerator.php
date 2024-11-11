<?php
require_once 'DatabaseConnection.php';
require_once 'Mysql.php';
require_once 'Postgresql.php';
class ReportGenerator{
    private $database;

    public function __construct(DatabaseConnection $database){
            $this->database = $database;
    }

    public function generator(){
        echo "Generating report generator\n";
    }
}
$mysql = new Mysql();
$report1 = new ReportGenerator($mysql);
$report1->generator();

$postsql = new Postgresql();
$report2 = new ReportGenerator($postsql);
$report2->generator();
?>