<?php

namespace Day;
 
class DateCalculate{

    public function getToday(){
        $dt = new \DateTime;
        return $dt->format('l');
    }

  
} 










 
?>