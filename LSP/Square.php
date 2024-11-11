<?php
require_once 'Reactangle.php';
class Square implements Shape{
    protected $side;

    public function setSide($side){
        $this->side = $side;
    }
    public function getArea()
    {
        return $this->side * $this->side;
    }
}

?>