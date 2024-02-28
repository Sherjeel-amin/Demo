<?php
 
 class Car{
    public $color;
    public $weight;
 }

 $car1 = new Car();
 $car1->color = "Red";
 

 $car2 = clone $car1; // if we write $car2 = $car1 -- it will refrence the same memory location and will be a shallow copy
 $car2->color = "Green";

echo $car1->color;

echo $car2->color;






?>