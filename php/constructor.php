<?php
class employee{

    public $userName;
    public $salary;

    //  This code will run whenever a object is instantiated
    // it is a constructor without any args
    // const with args

    function __construct($userName, $salary){
        $this->userName = $userName;
        $this->salary = $salary;
    }

}
$rohan = new employee("Rohan" , 34000);
$sherjeel = new employee("Sherjeel", 45000);
$momoii = new employee("Momin", 34000);

echo "the salary of sherjeel is $sherjeel->salary";
echo "the salary of momin is $momoii->salary";

?>