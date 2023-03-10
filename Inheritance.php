<?php

class Shape{
    protected $name;
    protected $area;
    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area} \n";
    }
    public function calculateArea(){

    }
}

class Triangle extends Shape{
    private $x;
    private $y;
    private $z;
    public function __construct($x,$y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        parent::__construct("Triangle");
    }

    public function calculateArea()
    {
        $perimeter = ($this->x+$this->y+$this->z);
        $this->area = sqrt($perimeter*($perimeter-$this->x)*($perimeter-$this->y)*($perimeter-$this->z)/2);
    }
}

class Rectangle extends Shape{
    private $x;
    private $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
        parent::__construct("Rectangle");
    }

    public function calculateArea()
    {
        $perimeter = $this->x*$this->y;
        $this->area = $perimeter;
    }
}

$tri = new Triangle(2,2,2);
$tri->getArea();

$rec = new Rectangle(5,5);
$rec->getArea();

