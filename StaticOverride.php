<?php
// Static method override example.
// If you override static method then parent class static function and child class have also same static function.
// If you want to show parent class property from child class, then use parent::functionName(); 

class Shuvo{
    static function Mango(){
        echo "Tell me your nickname.\n";
    }
}

class Rasel extends Shuvo{
    static function Mango(){
        echo "Tell me your pseudonym.\n";
        parent::Mango();
    }
}

Rasel::Mango();