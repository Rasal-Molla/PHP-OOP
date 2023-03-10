<?php

class ParentClass{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi {$this->name}\n";
    }
    
    function sayHi2(){
        echo "Hi2 {$this->name}\n";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        parent::sayHi2();
        echo "Hello\n";
    }
}

$child = new ChildClass("Vamper");
// $child->sayHi();