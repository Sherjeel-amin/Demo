<?php

// Scope resolution operator allows access constant, static and overridden property and method of the class

//Static - Declaring class members or method as static make them accessible without needing to instantiate the object

// Static member cannot be accessed with instentiate 

// class demo {
//     public static $name = "Sherjeel";

//     public static function dis(){
//         echo self::$name;
//     }
// }

// demo::disp();
// echo demo::$name;


// // Constants can also be acessed with the scope resolution operator

// class myClass extends demo{
//    public const course = "MSC";


// public static function display(){
//     echo parent::$name; // it takes the name prop from its parent class using parent keyword
// }
// }

// echo myClass::course; // Scope res operator used to print a constant variable
// echo myClass::display(); // This is used to display the method which is in myClass


class demo {
    public static $name = "Sherjeel";

    public static function display(){
        echo " the old one " . self::$name . " ";
    }
}

demo::display();
echo demo::$name;


// Constants can also be acessed with the scope resolution operator

class myClass extends demo{
   public const course = " MSC ";


public static function display(){
    echo " overridden " . parent::$name; // it takes the name prop from its parent class using parent keyword
}
}

echo myClass::course; // Scope res operator used to print a constant variable
echo myClass::display(); // This is used to display the method which is in myClass



?>