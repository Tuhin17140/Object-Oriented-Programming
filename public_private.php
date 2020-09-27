<?php

class fund
{
    private $fund;
    //by public it can be access from outside
    //by private it can't be access from outside
    function __construct($money = 0)
    {
        $this->fund = $money;
    }
    function addMoney($money)
    {
        $this->fund += $money;
    }
    function deductMoney($money)
    {
        $this->fund -= $money;
    }
    function totalMoney()
    {
        echo "Total money is $this->fund\n";
    }
}

$ourFund = new fund(100);
$ourFund->totalMoney();
$ourFund->addMoney(10);
$ourFund->totalMoney();
$ourFund->deductMoney(20);
$ourFund->totalMoney();
