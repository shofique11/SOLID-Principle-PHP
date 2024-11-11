
<?php
 class Postgresql implements DatabaseConnection{
    public function connection()
    {
        echo "Postgresql connection established\n";
    }
 }
?>