<?php

class Structure{

}

class Shapes{
    private $shapes;
    public function __construct()
    {
        $this->shapes = array();
    }

    public function addShape(Structure $shape){
        array_push($this->shapes, $shape);
    }

    public function totalShape(){
        return count($this->shapes);
    }
}

class Shapes1 extends Structure{

}

class Shapes2 extends Structure{

}

class Student{

}

$shapeCollection = new Shapes();
$shapeCollection->addShape(new Shapes1());
$shapeCollection->addShape(new Shapes2());
//$shapeCollection->addShape(new Student());

echo $shapeCollection->totalShape();
