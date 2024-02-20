<?php

$str1 = 'Hello how are you';
echo strlen($str1),"<br>";// length of the string
echo strrev($str1),"<br>";// Reverse the string 
echo strpos($str1, "you"),"<br>"; // Index of the word from which it is starting
echo str_replace("are","is",$str1); // replaces word -- ("word", "replacement", "the string")

?>