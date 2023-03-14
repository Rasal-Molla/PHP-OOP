<?php

class Division implements IteratorAggregate{
    private $divisions;
    public function __construct()
    {
        $this->divisions = array();
    }

    public function add($name){
        array_push($this->divisions,$name);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->divisions);
    }
}

$divisions = new Division;
$divisions->add('Rajshahi');
$divisions->add('Dhaka');
$divisions->add('Khulna');
$divisions->add('Barisal');
$divisions->add('Rangpur');

foreach($divisions as $division){
    echo $division. "\n";
}
