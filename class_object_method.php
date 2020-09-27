<?php

class Human
{
    public $name;
    function sayHI()
    {
        echo "Hello\n";
        $this->sayName();
    }
    function sayName()
    {
        echo "My name is $this->name\n";
    }
}


class Cat
{
    function sayHI()
    {
        echo "Meow";
    }
}



class Dog
{
    function sayHI()
    {
        echo "Woof";
    }
}


// $h1 = new Human();
// $h2 = new Human();
// $h1->name = "Tuhin"; //set operation
// $h2->name = "Abrar";
// $c1 = new Cat();
// $d1 = new Dog();

$h1->sayHI();
$h2->sayHi();
// $h1->sayName();
// echo $h1->name; //get operation