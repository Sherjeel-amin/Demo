<?php

class Student
{
    

    private $location;


    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property = $value;
        }else{
            echo "Property does not exist";
        }
    }

    public function __get($location)
    {
        return $this->$location;
    }
}

$Sherjeel = new Student();
$Sherjeel->location = "Srinagar"; // Setting the value for the property

echo $Sherjeel->location; // Now we can echo the value of the property because we have used get method

// var_dump($Sherjeel);
