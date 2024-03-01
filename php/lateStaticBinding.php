<?php

class Person{
    protected static $name = "Sherjeel";

function show(){
    echo static::$name; //using keyword static It will point to the variable of derived class //
}
}

class Detail extends Person{
    protected static $name = "Sherjeel Amin";

}
$obj = new Detail();
$obj->show();  // Sherjeel Amin will be printed as the static keyword will point to the variable of the derived class.


?>