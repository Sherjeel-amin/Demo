<?php
 class Car{
    public $name;
    public $model;

    

 }

 $ferrari1 = new Car();
 $ferrari1->name = "Ferrari123";
 $ferrari1->model = "1999";


 $ferrari2 = new Car();
 $ferrari2->name = "Ferrari123";
 $ferrari2->model = "1999";

 var_dump ($ferrari1 == $ferrari1); // Will be true because they are the same objects
 var_dump ($ferrari1 == $ferrari2); // Will be true because they have some content
 var_dump ($ferrari1 === $ferrari2); // Will be false because they are referring to different memory locations // Not identical


 






?>