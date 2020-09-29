 <?php

 class Shape{
     protected $name;
     protected $area;
     function __construct($name)
     {
         $this->name = $name;
         $this->calculateArea();
     }
     function getArea(){
        echo "This {$this->name} area is {$this->area}";
     }
     function calculateArea(){}
 }

class Triangle extends Shape{
    private $a,$b,$c;
    function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct("Triangle");
    }
    function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }
}
class Rectangular extends Shape{
    private $a,$b;
    function __construct($a,$b){
        $this->a = $a;
        $this->b=$b;
        parent::__construct("Rectangular");
    }
    function calculateArea()
    {
        $this->area = $this->a*$this->b;
    }
}
// $t = new Triangle(2,4,5);
// echo $t->getArea();
// $s = new Shape("Rec");
// echo $s->getArea();

$r = new Rectangular(2,5);
echo $r->getArea();
