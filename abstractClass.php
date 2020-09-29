<?php

abstract class Shape{
    function greet(){
        echo "Hello";
    }
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangular extends Shape{
    private $base;
    private $height;
    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;     
    }

    function setBase($base){
        $this->base = $base;
    }
    function setHeight($height){
        $this->height = $height;
    }
    function getArea(){
        echo $this->base*$this->height;
    }
    function getPerimeter(){

    }
}

class Triangle extends Shape{
    function getArea(){
        echo $this->base*$this->height;
    }
    function getPerimeter(){

    }
}

$rec = new Rectangular(5,5);
// $tri = new Triangle();

$rec->getArea();
// $rec->greet();
