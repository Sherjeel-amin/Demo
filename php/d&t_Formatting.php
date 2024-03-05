<?php
$date = '24/02/2024 3:30PM';   

// $dateTime = new DateTime($date); 

// $dateTime = new DateTime($date);

// var_dump($dateTime);   // Throws an erro because the default format is mm/dd/yyyy

$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date); // we can provide the fomat to the given date // 

var_dump($dateTime);




?>