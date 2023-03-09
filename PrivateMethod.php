<?php

class Fund
{
    private $fund;
    function __construct($initial = 0)
    {
        $this->fund = $initial;
    }
    public function addMoney($money)
    {
        $this->fund += $money;
    }

    public function deductMoney($money)
    {
        $this->fund -= $money;
    }

    public function totalMoney()
    {
        echo "Total amount is {$this->fund} BDT. \n";
    }
}

$ourFund = new Fund(150);
//$ourFund->fund = 500; // Unauthorized access & fund should be private
$ourFund->addMoney(50);
$ourFund->deductMoney(100);
$ourFund->totalMoney();
