<?php
// __get magic method

class Student{
    private $data = ["name"=> "Sherjeel", "Course" => "php"];


public function __get($key){

    if(array_key_exists($key, $this->data)){
        return $this->data[$key];
    }else{
        return "Value does not exist";
    }
}
}

$Sherjeel = new Student();
echo $Sherjeel->Course;
echo $Sherjeel->name;
// using get we are able to access the values of the array which is a private property..





?>