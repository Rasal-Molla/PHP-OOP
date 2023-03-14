<?php

// To define constant use const keyword another way use define keyword.
// Inside class constants are static property.
// Inside class function to access the constant, use self::constantVariableName or $this::constantVariableName.
// Outside of the class we can also call the constant. like: echo ClassName::ConstantVariableName.

define('OK', "Hello Mr OK\n");

class TestClass{
    const CITY = "Cape Town";
    public function Town(){
        echo "I live in ".$this::CITY ."\n";
    }
}

$c = new TestClass();
$c->Town();
echo TestClass::CITY;
