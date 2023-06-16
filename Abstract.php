<?php 

// Abstract method have no body and must be use the abstract method if you extends the abstract class*.
// To write the abstract class use Abstract keyword.
// To write the abstract function or method use Abstract keyword.
// Abstract class can not instantiate.
// Inside abstract class we can write some common class.

abstract class Format{
    abstract public function getArea();
    abstract public function getPerimeter();
}

class Rectangle extends Format{
    private $base;
    private $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setbase($base){
        $this->base = $base;
    }
    
    public function setHeight($height){
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->base*$this->height;
    }

    public function getPerimeter()
    {
        
    }
}

class Triangle extends Format{
    public function getArea()
    {
        
    }

    public function getPerimeter()
    {
        
    }
}
// Function call
$rec = new Rectangle(8,8);
echo $rec->getArea();
