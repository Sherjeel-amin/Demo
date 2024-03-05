<?php

$date1 = new DateTime("03/22/2022 03:40:22 AM");
$date2 = new DateTime("02/07/2020 02:35:44 PM");

var_dump($date1 < $date2);

var_dump($date1 > $date2);

var_dump($date1 == $date2);

var_dump($date1 <=> $date2);

// To calculate differce between two date and Times 

var_dump($date1->diff($date2));

// if you want to create a date which you wan to be immutable we can create a immutable object // 

$dateImmu = new DateTimeImmutable();

var_dump($dateImmu);








?>