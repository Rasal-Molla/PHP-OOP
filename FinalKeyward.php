<?php

// Can not override final method, Cause method body part is fixed.

abstract class Myclass{
    final function myFunction(){
        echo "We can't override this function.";
    }
}

class OurClass extends Myclass{
    
}

$our = new OurClass();
$our->myFunction();