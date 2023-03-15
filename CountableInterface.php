<?php

class Calculation implements Countable{
    private $districts;
    public function __construct()
    {
        $this->districts = array();
    }

    public function add($name){
        array_push($this->districts, $name);
    }

    public function count()
    {
        return count($this->districts);
    }
}

$cal = new Calculation;
$cal->add('Rajshahi');
$cal->add('Rangpur');
$cal->add('Rajbari');
$cal->add('Barisal');
$cal->add('Khulna');
$cal->add('Madaripur');
$cal->add('Dhaka');
$cal->add('Takerhat');

echo count($cal);