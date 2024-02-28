<?php

class Customer {
    private $firstName;
    private $lastName;

    private function setName($fname, $lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    public function __call($method, $args){
        if(method_exists($this, $method)){
            call_user_func_array([$this,$method], $args);
        }else{
            echo "Method does not exist";
        }
    }
}

$obj = new Customer;
$obj->setName("Sherjeel", "Amin");

var_dump($obj);

?>