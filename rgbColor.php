<?php
/*
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode,'#');
        $this->purseColor();
    }

    function getColor()
    {
        echo $this->color;
    }

    function getRGBColor(){
        print_r(array($this->red,$this->green,$this->blue));
    }

    function readRGBColor(){
        echo "Red = $this->red\nGreen = $this->green\nBlue = $this->blue"."\n";
    }

    function setColor($colorCode){
        $this->color = ltrim($colorCode,'#');
        $this->purseColor();
    }

    private function purseColor(){
        if($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
        }else{
            list($this->red,$this->green,$this->blue) = array(0,0,0,0);
        }
        
    }
    function getRed(){
        echo "Red= $this->red\n";
    }
    function getGreen(){
        echo "Green= $this->green\n";
    }
    function getBlue(){
        echo "Blue= $this->blue\n";
    }
}


$myColor = new RGB;
$myColor->setColor('#ffef27');
// $myColor->getRGBColor();
$myColor->readRGBColor();
$myColor->getBlue();

$myColor->readRGBColor();*/



class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode)
    {
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }

    function getColor(){
        echo $this->color."\n";
    }
    function getRGBColor(){
        print_r(array($this->red,$this->green,$this->blue))."\n";
    }
    function readRGBColor(){
        echo "Red = $this->red\nGreen = $this->green\nBlue = $this->blue\n";
    }
    function setColor($colorCode){
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }
    private function parseColor(){
        if($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
        }
    }
    function getRed(){
        echo $this->red."\n";
    }
    function getGreen(){
        echo $this->green."\n";
    }
    function getBlue(){
        echo $this->blue."\n";
    }
}

$myColor = new RGB("#ffef27");
$myColor->getColor();
$myColor->getRGBColor();
$myColor->readRGBColor();
$myColor->getRed();