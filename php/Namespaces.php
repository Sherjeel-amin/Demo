<?php
 
// namespace App; // We can access the below class using this namespace by App\Person //
namespace App\hello; // --> sub namespaces //

class Person{
    public $name = "Sherjeel";
}


$p1 = new Person();
echo $p1 -> name;

class DateTime{
    public $className = "My date time";
}


?>