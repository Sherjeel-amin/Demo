<?php
 // You can directly declare a object and the class will not have a name of its own

 $object = new class{
    function giveName($name){
        return $this->$name = $name;
    }
 };

 echo $object->giveName("Sherjeel");
 // it is used when the object will not be used one again.
?>