<?php

class DisctrictCollection implements IteratorAggregate,Countable{
    private $districts;
    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }
    function getDistricts(){
    return $this->districts;
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
    function count(){
        return count($this->districts);
    }
}

$district = new DisctrictCollection();
$district->add("Jessore\n");
$district->add("Kumilla\n");
$district->add("Khulna\n");

echo count($district);