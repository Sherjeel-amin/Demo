<?php
$t = date("H");
if($t==5)
{
    echo $t . "is a good time";
}else if($t ==9){
    echo "bad luck","<br>";
}else{
    echo "bad bad luck";
}

echo date_default_timezone_get();


?>