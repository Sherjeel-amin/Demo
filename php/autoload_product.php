<?php
 spl_autoload_register(function($class)
 {
     require "$class.php";
 });

 $obj = new Product();
 $obj->hi();
 
 // dependency injections // -- framework
?>