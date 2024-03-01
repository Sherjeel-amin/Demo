<?php

// syntax -- run time -- logic


// Parse error when we miss anything in the syntax -- program execution stops //

// Fatal error occurs when an undeclared function is recognized and is called with decalring -- stops execution

// $a  = "Sherjeel";

// call_func($a);

//-- Warning -- if there is a missing file -- does not terminate the script --////

// include "abc.php";

// echo "The file does not exist but this script will be executed anyway";

// Notice Error -- means program contains something wrong but allows the execution -- like echoing an undefined var//


// echo $a;



// if($number >0){
//     $div = 250/ $number;
// }else{
//     echo "Enter the valid number";
// }

// echo $div;
class MyException extends Exception{

function errorMessage(){
    $error = $this->getMessage();  // You can also make your own exception  by inherting the porperties of exception class
    return $error;              
}
}


$number = 3;
try{
    if($number<=0){
        throw new Exception("Enter the valid number");
    }
    if($number ==3){
        throw new MyException("Number is 3");
    }
    $div = 22/$number;
    echo $div;
}catch(MyException $e){ // This will invoke our custom made error class and return the defined value
    echo $e->getMessage(); 
}catch(Exception $e){           // we can also use getLine to get line number of the error // getFile for getting the error file.
    echo $e->getMessage();  
}

finally{
    echo "Finally will run anyway"; // Finally block will always run // 
}











?>