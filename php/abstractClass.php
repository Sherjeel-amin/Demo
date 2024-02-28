<?php
 
abstract class Car{ // abstract class cannot be instantiated
    function getName(){
        return "I am a car";
    }
    abstract public function carSpeed();
}

// $car = new Car;
// echo $car->getName(); // throws error

class BMW extends Car{

    public function carSpeed(){
        echo "supeet";
    }

}

$car = new BMW;
echo $car->getName(); // It will show the output because we can inherit the abstract class
echo $car->carSpeed();

// same goes with a function


?>