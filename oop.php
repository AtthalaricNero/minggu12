<?php 
class Car 
{
    public $brand;

    public function startEngine() 
    {
        echo "Engine started!";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo "\n" . $car2->brand;
?>