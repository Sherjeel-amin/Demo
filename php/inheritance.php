<?php

class user{
    public $name;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        echo $this->name;
    }
}

class address extends user{
    public $address;

    function address($address){
        $this->address = $address;
    }
    function details(){
        echo "My name is $this->name and I live at $this->address";
    }
}
// $user1 = new user();
// $user1->name = "Sherjeel";
// $user1->getName();
 
$user2 = new address(); // as I have created an object in the address class. it still allows me to use name prop from class user
$user2-> name = "Momin";
$user2-> address = "Srinagar";
$user2->details();











?>