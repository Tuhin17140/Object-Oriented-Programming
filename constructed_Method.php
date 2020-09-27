<?php

// class Human{
//     public $name;
//     function __construct($personName){  //__construct will run automitially
//         $this->name = $personName;  
//     }
//     function sayHi(){
//         echo "Hello\n";
//         $this->sayName();
//     } 
//     function sayName(){
//         echo "My name is $this->name\n";
//     }                   
// }
class Human
{
    public $name;           //attributes
    public $age;
    function __construct($personName, $age = 0)
    {  //__construct will run automitially
        $this->name = $personName;
        $this->age = $age;
    }
    function sayHi()
    {
        echo "Hello\n";
        $this->sayName();
    }
    function sayName()
    {
        if ($this->age) {
            echo "My name is {$this->name},\nand i'm {$this->age} years old\n";
        } else {
            echo "My name is {$this->name} & i don't know my age\n";
        }
    }
}
$h1 = new Human("Tuhin", 20);
$h2 = new Human("Rakib", 22);
$h3 = new Human("Rakib");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
