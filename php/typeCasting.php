<?php
// type casting different data types

$num1 = 2.33567;
// $num2 = (int)($num1);
$num2 = (int)($num1);
echo $num1, "<br>";
echo $num2, "<br>";
echo gettype($num1),"<br>";
echo gettype($num2); // we can use gettype to see the datatype of the data

$string1 = "33";
$string2 = "45";
echo gettype($string1),"<br>";
$num1 = (int)($string1);
echo "<br>";
$num2 = (int)($string2);

$num3 = $num1 + $num2;
echo $num3;

$string1 = (int)"33";
$string2 = (int)"45";

echo "sum = ". $string1+$string2; // We can do it this way too //
echo "<br>";

$e1 = "13";
$e2 = "12"; // Will be treated as a string unless no operator is used


$e3 = $e1+$e2; // It will automatically convert to double when the operator is used

echo gettype($e3);
echo "<br>";
echo "<br>";

$foo = 1 + "10 Small Pigs";
echo $foo;


?>      