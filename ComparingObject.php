<?php

class MyCompare{
    public $compare;
    public function __construct($compare)
    {
        $this->compare = $compare;
    }
}

$com1 = new MyCompare('World');
//$com2 = $com;
$com3 = new MyCompare('World');
$com4 = new MyCompare('Hello');

if($com1 === $com3){
    echo "Similar";
}else{
    echo "Not similar";
}