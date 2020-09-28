<?php

class Animal{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function eat(){
        echo "{$this->name} is eating\n";
    }
    function run(){
        echo "{$this->name} is running\n";
    }
    function sleep(){
        echo "{$this->name} is sleeping\n";
    }
    protected function greeting(){}

    protected function addTitle($title){
        $this->name = $title." ".$this->name;
    }
}


class Human extends Animal{
    function greeting(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi\n";
    }
}
class Cat extends Animal{
    function greeting(){
        echo "{$this->name} says Meow\n";
    }
}
class Dog extends Animal{
    function greeting(){
        echo "{$this->name} says Woof\n";
    }
}

$tuhin = new Human("tuhin");
$cat = new Cat("billi");
$tuhin->greeting();
$tuhin->eat();
