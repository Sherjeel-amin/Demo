<?php
// While loop
    // $var1 = 0;
    // while($var1 <=5){// While Loop
    //  if($var1 == 3){
    //     break; // Break statement
    //     }
    //     $var1++;
    //     echo $var1, "<br>";
    // }


    // // For Loop

    // for($i=0;$i<10;$i++){// For Loop
    //     if($i==0 || $i==3 || $i==5){ // Removing some numbers using OR operator
    //         continue;
    //     }
    //     echo $i;
    //     }
    // // For-each loop

    // $fruits = ['apple','banana','orange'];

    // echo $fruits[0];

    // foreach($fruits as $fruit){
    //     echo $fruit;
    // }

$fruitClr = ["Apple" => "Red", "Banana" => "Yellow", "Orange"=> "Orange"];

foreach ($fruitClr as $fruits => $colour){
    echo $fruits . $colour;
}


    



    
?>