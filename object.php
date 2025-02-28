<?php
class Car{
    public $color;
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
}
$myCar=new Car();
$myCar->setColor("Red");
$car=new Car();
$car->setColor("Black");
echo "The color of the car is : ".$car->getColor()."<br>";
echo "The color of second car is : ".$myCar->getColor();
?>