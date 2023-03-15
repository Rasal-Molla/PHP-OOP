<?php

class Color{
    public $color;
    public function __construct($color='')
    {
        $this->color = $color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function __toString()
    {
        return "The color is {$this->color}.";
    }

    // public function getColor(){
    //     return $this->color;
    // }
}

$col = new Color('Red');
echo $col;

// $col->setColor('Blue');
// echo $col->getColor();