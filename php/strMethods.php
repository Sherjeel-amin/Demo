<?php

$str1 = '    Hello how are you    ';

echo strlen($str1),"<br>";// length of the string

echo strrev($str1),"<br>";// Reverse the string 

echo strpos($str1, "you"),"<br>"; // Index of the word from which it is starting

echo str_replace("are","is",$str1); // replaces word -- ("word", "replacement", "the string")

echo str_word_count($str1); // gives the number of words in a string

echo str_repeat($str1, 4); // repeats string n number of times

echo rtrim($str1); // trims whitespaces from the right side

echo ltrim($str1); // trims whitespaces from the left side



?>