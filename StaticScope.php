<?php
//
use ChildClass as GlobalChildClass;

class BaseClass{
    public static $name;
    public static function sayName()
    {
        self::$name = "Rasel\n";
        echo "Hello\n";
    }
}

class ChildClass extends BaseClass{
    public static function sayName()
    {
        Parent::sayName();
        echo parent::$name;
        echo "Hi";
    }
}

ChildClass::sayName();

//echo ChildClass::$name;