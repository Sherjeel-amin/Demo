<?php
class User{
    protected $loggedIn = false;
    protected $data = [];

    public function getData(){
        echo 'invoked now';
        // return $this-> data;
    }
    public function setData($data){
        $this->data = $data;
    }

    public function isLoggedIn(){
        return $this-> loggedIn;
    }
}

$rm = new ReflectionMethod('User', 'getData');

// echo "<pre>" . print_r(get_class_methods($rm), true);

$user = new User;
echo $rm-> invoke($user);


?>