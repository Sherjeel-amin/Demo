<?php
 
final class Fruit{                  // It will not let any class to inherit //
    final public function intro(){
        echo "Inside parent class";
    }
}

class Strawberry extends Fruit{
    public function intro(){
        echo "Inside child class"; // Final doesnt let overriding // 
    }
}

?>