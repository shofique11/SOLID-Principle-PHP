<?php
require_once 'Reactangle.php';
require_once 'Square.php';
  class Client{
      public function __construct(){
        echo "Los";
      }
  }
  $rectangle = new Reactangle();
  $rectangle->setHeight(60);
  $rectangle->setWidth(30);
  echo $rectangle->getArea();

  $square = new Square();
?>