<?php
 
class User{
    protected $loggedIn = false;
    protected $data = [];

    public function getData(){
        return $this-> data;
    }
    public function setData($data){
        $this->data = $data;
    }

    public function isLoggedIn(){
        return $this-> loggedIn;
    }
}

// $rc = new User();
// $rc->setData("Hello => Bye");

// print_r($rc->data);

// echo print_r(get_class_methods($rc),true); // will provide the methods inside the class but if we 
                                            // convert into a reflection class we can access additional methods and can have more access//

                                            
$rcObj = new ReflectionClass('User'); // Converting class into reflection class

echo "<pre> " . print_r(get_class_methods($rcObj),true); // Will give all the apllicable functions

echo $rcObj->getName();          // Will provide the name of the class

if($rcObj -> hasMethod('isLoggedIn')){
    echo "Yes";                             // will check if this method is in the class
}




?>