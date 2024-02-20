<?php
$numbers = array(6,2,3,1,5,7,8,9,4); // Create an array
rsort($numbers); // Sort array in ascendind order
$length = count($numbers); // Length of the array

for($i = 0;$i<$length;$i++){
    echo $numbers[$i]; // print numbers of the array one by one using index --  numbers[0], numbers[1]..
    echo "<br>";
}

// New Syntax
$array1 = [
    "name" => "Sherjeel",
    "address" => "Srinagar",
];

print_r($array1);
echo "<br>";

// This array will show only the last key value pair since all the above values map to same key that is 1
$array2 = [
    1    => "a",
    "1"  => "b",
    2  => "c",
    true => "d",
];
print_r($array2);

echo "--------" , "<br>";

// array can use both strings and numeric values as keys and values can be anything
$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array3);

echo "-----" , "<br>";

// We can give the key to any element leaving the rest as such

$array4 = array(
    "a",
    "b",
"thisChar" => "This is a value",
    "d",
);
var_dump($array4);
echo "<br>";

print_r($array4["thisChar"]); // accessing elements using key //


echo "<br>";

// Multi Dimesntional array 
$arrayMulti = [
    "name" => "Sherjeel",
     "address"=>
     ["state" => "Kashmir",
     "city" => "Srinagar",
     "area" => 
     ["street" => "upperSathu"]
     ]
];

print_r($arrayMulti["name"]);
echo "<br>";
// var_dump($arrayMulti["address"]);
print_r($arrayMulti["address"]["city"]);   // we can access elements of m dim array this way //
echo "<br>";
print_r($arrayMulti["address"]["area"]["street"]);

// modifying value now
$arrayMulti["name"] = "Momin";
echo "<br>";
print_r($arrayMulti["name"]);
$arrayMulti["address"]["area"]["street"] = "Sathu";
echo "<br>";
print_r($arrayMulti["address"]["area"]["street"]);

// // Array manuplations
// $arr = array(5 => 1, 12 => 2);

// $arr[] = 56;    // This is the same as $arr[13] = 56;
//                 // at this point of the script

// $arr["x"] = 42; // This adds a new element to
//                 // the array with key "x"
                
// unset($arr[5]); // This removes the element from the array

// unset($arr);    // This deletes the whole array
////////////////////////////////////////////////////////////////////////////////////
echo "<br>";
// Create a simple array.
$array = [1, 2, 3, 4, 5];
print_r($array);
echo "<br>";
// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
echo "<br>";
// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
echo "<br>";
// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);
echo "<br>";

// Destructuring an array

$source_array = ['hello', 'hi', 'bye'];

[$ele1, $ele2, $ele3] = $source_array;

echo $ele1;    // prints "hello"
echo "<br>";
echo $ele2;    // prints "hi"
echo "<br>";
echo $ele3;    // prints "bye"
echo "<br>";




////

$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);// removes element withe key -2
/* will produce an array that would have been defined as
   $a = array(1 => 'one', 3 => 'three');
   and NOT
   $a = array(1 => 'one', 2 =>'three');
*/

$b = array_values($a);// Gives proper index after removing the element from the array

// Now $b is array(0 => 'one', 1 =>'three')

var_dump($b);

?>