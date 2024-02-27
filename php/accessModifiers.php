<?php
// Access Modifies -- Public - can be accessed by anywhere , Private-- within class and Protected - like private but some changes

class employee{

    private $name = "sherjeel";

    function showName(){     // Functions are deafult Public // 
        echo "$this->name";
    }
    // Private can only be accessed by other members of the class.
}

$sher = new employee();
// echo $sher->name; --> Will not work because name is private and can be accessed by member function

$sher->showName();




?>