<?php

class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    // public function setName($name){
    //     $this->name = $name;
    // }
    // public function getName(){
    //     return $this->name;
    // }
    // public function setAge($age){
    //     $this->age = $age;
    // }
    // public function getAge(){
    //     return $this->age;
    // }
    // public function setClass($class){
    //     $this->class = $class;
    // }
    // public function getClass(){
    //     return $this->class;
    // }
}

$std = new Student('Shuvo','26','B.Sc');
echo $std->name;


// $std->name = 'Rasel';
// echo $std->name."\n";
// $std->age = 23;
// echo $std->age."\n";
// $std->class = "B.Sc";
// echo $std->class;