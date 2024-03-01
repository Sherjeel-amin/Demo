<?php
 
interface Human{


    public function sayName(string $name);
    public function sayAge(int $age);
}

class Sherjeel implements Human{

    public $name;
    public $age;
   

    function sayName($name){
        return $this->name = $name;
    }

    function sayAge($age){
        return $this->age = $age;
    }
}

$sherjeel = new Sherjeel;
$sherjeel->sayName("Sherjeel");
$sherjeel->sayAge(23);


print_r($sherjeel);

?>