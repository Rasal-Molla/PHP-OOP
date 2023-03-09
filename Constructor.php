<?php

class Information
{
    public $name;
    public $age;
    function __construct($personName, $personAge = 0)
    {
        //echo "Construct created \n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function personInfo()
    {
        echo "Introduce yourself \n";
        $this->person();
    }

    public function person()
    {
        if ($this->age) {
            echo "My name is {$this->name} & I'm {$this->age} years old. \n";
        } else {
            echo "My name is {$this->name} & I don't my correct age. \n";
        }
    }
}

$h1 = new Information("Rasel", 25);
$h1->personInfo();

$h2 = new Information("Shuvo");
$h2->personInfo();
