<?php

class Human{
    public $name;
    public $age;
    function identity(){
        echo "My name is {$this->name} \n";
        echo "My current age is {$this->age} \n";
    }

    function age(){
        echo "My current age is 24 years \n";
    }
}

class City{
    function location(){
        echo "My home town is Madaripur \n";
    }
}

class Present{
    function current(){
        echo "Now I'm in Uttara \n";
    }
}

$h1 = new Human();
// $h1->identity(); // Individual function call from Human class and get result
// $h1->age(); // Individual function call from Human class and get result

$h2 = new Human;
$h2->name = "Shuvo"; // Set the value 
$h2->age = 23; // Set the value
$h2->identity(); // Get the value
//echo $h2->name; // Get the value

$h3 = new Human;
$h3->name = "Rasel"; //Set the value
$h3->age = 24; // Set the value
$h3->identity();

$c = new City();
$c->location();

$p = new Present();
$p->current();