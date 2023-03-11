<?php

// When we create Interface, inside Interface there are some function and method, but there will be no body part.
// When we create a class to use Interface function, use Implements keyword to get access the Interface.
// If you take access of Interface, you must have to use all the function that we declare inside Interface.
// Class can not extends Interface, only Abstract class can extends Interface.
// One Interface can extends another Interface.
// Using instanceof keyword we can check the object.
// When one object represent more than one Interface, it's called polymorphism.
// Example: $test = new Human(); echo $test instanceof BaseHuman , Resutl = 1
// Example: $test = new Human(); echo $test instanceof BaseAnimal , Resutl = 1

interface BaseAnimal{
    public function isAlive();
    public function canEat();
    public function doAnything($any, $thing);
}

class Animal implements BaseAnimal{
    public function isAlive()
    {
        
    }

    public function canEat()
    {
        
    }

    public function doAnything($any, $thing)
    {
        
    }
}

interface BaseHuman extends BaseAnimal{
    public function canTalk();
    public function canRun();
}

abstract class Women implements BaseHuman{
    abstract public function isName();
    public function yesName(){
        echo "Tell me your name";
    }
}

class Human extends Women{
    public function canTalk()
    {
        
    }

    public function canRun()
    {
        
    }

    public function canEat()
    {
        
    }

    public function isAlive()
    {
        
    }

    public function doAnything($any, $thing)
    {
        
    }

    public function isName()
    {
        
    }
}


$test = new Human();
echo $test instanceof BaseHuman;