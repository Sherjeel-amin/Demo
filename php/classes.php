<?php
class user {
    // Properties
    public $name;
    public $address;
    
    //Methods
function setName($name){
    $this->name = $name;
}
function setAddress($address){
    $this->address = $address;
}

function getName(){
    return $this->name;
}
function getAdd(){
    return $this->address;
}

}


$user1->setName("sherjeel");
$user1->setAddress("Srinagar");

echo $user1->getName();
echo $user1->getAdd();



?>