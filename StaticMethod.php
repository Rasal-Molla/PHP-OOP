<?php

class MathCalculation{
    private $num;
    static $name;
    static public function doSummation($n){
        echo self::$name."\n";
        echo "The summation function print {$n}\n";
    }
    
    static public function doSomething(){
        echo "Do something for us\n";
    }

    public function doMultiplication($n){
        self::$name = "XYZ"; 
        self::doSomething();
        $this->num = 15;
        echo "The multiplication function print {$n} & {$this->num}\n";
    }
}

$math = new MathCalculation();
$math->doMultiplication(6);

MathCalculation::doSummation(7);
echo MathCalculation::$name;
