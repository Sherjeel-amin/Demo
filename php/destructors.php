<?php

class user{

    public $name;
    public $salary;

    function __construct($name,$salary)
    {
        $this->name = $name; 
        $this->salary = $salary;
    }
    // This is a destructor and it destructs all the objects afte the script is executed in a last in first out fashion
    function __destruct()
    {
        echo "I am destructed<br>";
    }


    }
    
    $sher = new user("Sherjeel",32000);
    echo ("my name is $sher->name and my salary is $sher->salary");
    
    


?>