<?php
// While loop
    $var1 = 0;
    while($var1 <=5){// While Loop
     if($var1 == 3){
        break; // Break statement
        }
        $var1++;
        echo $var1, "<br>";
    }

    for($i=0;$i<10;$i++){// For Loop
        if($i==0 || $i==3 || $i==5){ // Removing some numbers using OR operator
            continue;
        }
        echo $i;
        }

?>