<?php
class MainClass{

    public function showText($arg){
        echo "This is one arg function";
    }

    public function showText($arg1,$arg2)
    {
        echo "this is two arg function";
    }

}
$object = new MainClass;
$object->showText('php');

// php does not support function overloading // It will throw an error



?>