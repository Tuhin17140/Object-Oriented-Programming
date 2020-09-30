<?php

class Color{
    private $color;
    function __construct($color)
    {
         $this->color = $color;
    }
    function setColor($color){
        $this->color = $color;
    }
    function __toString(){
        return "This is $this->color";
    }
}
//for directly echo  an object to a string then __toString() method must be included in the base class;
$c = new Color("red"); 
echo $c;
