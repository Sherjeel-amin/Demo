<?php

// Serializing means converting the object into a string or text representation -- serialize() and unserialize()

class Person {
    public $name;
    public $age;

    function __sleep(){                  // will be called when serialze is called //
        echo "Sleep has been called"; 
        echo "<br>";
        return ['name','age'];      // we can choose what property we want to serialze here //   
    }

    function __wakeup()    // will be called when unserialze is called //
    {
        echo "Wake up has been called"; 
    }

}
$p1 = new Person();
$p1->name = "Sherjeel";
$p1->age = 23;

// print_r($p1); // to print the object //

$serP1 = serialize($p1); // Converts into Str and can be echoed  //

echo $serP1; // echoing the serialized object

$unserP1 = unserialize($serP1); // converting back to object

print_r($unserP1); // printing the value of the object after converting back to object from String //

echo gettype($unserP1);

echo $unserP1->name;


// Sleep and wakeup are the default methods which are called when you searlize the object and unseralize the object//






?>