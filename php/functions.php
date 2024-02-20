<?php
define("x",2);// Constant Defintion
function averageNumbers($num1,$num2){
    $average = ($num1 + $num2) / x;   // We can also use constants inside the funcitons.
    return ("The average is $average");
}

echo averageNumbers(12,24);
?>