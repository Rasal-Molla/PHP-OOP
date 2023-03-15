<?php

class Color{
    public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor($color){
        $this->color = $color;
    }
}

class FavColor{
    public $data;
    public $color;
    public function __construct($data,$color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }

    public function updateColor($color){
        $this->color->setColor($color);
    }

    public function __clone()
    {
        $this->color = clone $this->color;
    }
}

$fv = new FavColor('Some Data', 'Red');
print_r($fv);

$fv2 = clone $fv;
print_r($fv2);

$fv2->updateColor('Green');
print_r($fv);
print_r($fv2);
