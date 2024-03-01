<?php
 
class Abc{
    public $name;

}

$aa = new Abc();
$aa->name = "Shaka";

$bb = $aa;
$bb->name = "Shakalala";

var_dump($aa,$bb);


$a = new Abc;
$a->name = "Shaka";
$b = &$a;

$b->name = "chakakhan";
var_dump($a,$b);


?>