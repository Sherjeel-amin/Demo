<?php
// $array = ["name" => "Sherjeel",
//             "address" => "Srinagar",
// ];

// print_r(array_change_key_case($array, CASE_UPPER)); // Chnages keys to UpperCase
// print_r(array_change_key_case($array, CASE_LOWER)); //  Chnages keys to lowerCase

// echo "<br>";

// $input_array = ['abc'=>"one", 'boo'=>"two", 'caa'=>"three", 'dee'=> "Four", 'eee'=> "Five"];
// print_r(array_chunk($input_array, 1)); // array_chunk(array,chunk size)

// echo "<br>";

// $array1 = ["a", "b", "c", "d", "e"];

// print_r(array_slice($array1,2,4)); // array_slice(arrayName, from which element , how many elements)

// $array = [1, "hello", 1, "world", "hello"];
// print_r(array_count_values($array)); // Gives the count of elements in the array


// $arrColour = ['green', 'red', 'yellow'];
// $arrFruit= ['avocado', 'apple', 'banana'];
// array_push($arrColour,"Crimson");  // push item
// array_push($arrFruit,"Strawberry"); 
// $arrClrNfruit= array_combine($arrColour, $arrFruit); // (keys,vals)

// // $poppedItem = array_pop($c);
// // print_r($poppedItem);

// // echo "<br>";
// // print_r($c); 

// // print_r(array_keys($c));
// $arrClrNfruit ['white'] = "orange"; // array ["key"] = "value"; // Pushing with value and key


// print_r($arrClrNfruit);

// $arrNum = [1,2,3,4,5,6,7,8];
// function double($number){
//     return $number  * 2;
// };

// $newArray = array_map('double',$arrNum); // array_map(Function , Array)
    
// print_r($newArray);

// function isOdd($number){
//     return $number % 2 == 1;
// };
// echo "<br>";
// $newArray1 = array_filter($arrNum,'isOdd'); // Array_filter(array,Function)
// print_r($newArray1);

// $array1 = ['a', 2, 4];
// $array2 = ["b", "c", 'f'];
// $result = array_merge($array1, $array2);
// echo "<pre>";
// print_r($result);
// echo "</pre>"

// //Splice

// $array = ["mango", "Cherry", "orange", "Banana"];

// array_splice($array,3,1,"apple"); // array, from index remove, how many elements, replace with

// print_r($array);

// $a = "33";
// $b = "22";
// $c = $a + $b;

// echo $c;


// $arr = [1,2,3,4];

// $newArr = [10,20];

// $arrM = array_slice($arr,2,3);    

// $result = array_merge($newArr , $arrM);  // exchanging the first two elements of the array //

// print_r($result);  

// $arr = [1,2,3,4,5,6,7,8];

// $newElement = [10,20,30];

// array_splice($arr,3,1,$newElement); // exchanging middle items in an array using splice

// print_r($arr);

// $arr = [1,2,3,4,5,6];

// $newElement = [10,20];

// array_splice($arr,0,2,$newElement);   // To exchange the first elements of the array using spice

// print_r($arr);

// $arr = [1,2,2,2,3,4,4,5,6,7];

// $arrS = array_unique($arr);

// $final_arr = array_values($arrS);   // To remove duplicates from an array and reset the index values

// print_r($final_arr);



?>