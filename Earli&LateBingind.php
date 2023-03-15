<?php

// Late bining = we are using static::, always search child class function
// Early binding = we are using self::, always serach parent class function

class Planet{
    static function echoName(){
        echo static::getName(); // Late binding 
        //echo self::getName(); // Early binding
    }

    static function getName(){
        return "Earth";
    }
}

class Earth extends Planet{
    static function getName()
    {
        return "Pluto";
    }
}

Earth::echoName();