<?php
class Reactangle implements Shape{
    protected $height;
    protected $width;
    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}

?>