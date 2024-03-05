<?php

$d = date("dS F Y g:i A"); // (d - date) (S - rd or th) (F- Month) (Y - Year) (g:i - hours and minutes) (A - AM or PM) 
echo $d;

// we can also make a date time object

$date = new DateTime("04/03/2024 03:30PM"); // object set in Asia/kolkata time zone by default //

var_dump($date);

// echo timezone_name_get($date);
// // we can also used DateTimeZone function to specify the timezone //


// $date2 = new DateTime("tomorrow noon");  // Gives tomorrows date and time at noon

// var_dump($date2);

// we can change the time zone by using set time zone functions

$date->setTimezone(new DateTimeZone('Europe/Amsterdam')); //

// var_dump($date);

echo $date->getTimezone()->getName();

$date->setDate(2024,02,20)-> setTime(2,30); // we can set a new date here // 

var_dump($date);

?>
