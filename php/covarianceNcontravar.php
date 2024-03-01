<?php

abstract class Animal{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    abstract public function speak();
}


class Dog extends Animal{
    public function speak(){
        echo "$this->name" . "Barks";
    }

}

class Cat extends Animal{
    public function speak(){
        echo "$this->name" . "Meows";
    }

}

interface AnimalShelter {
    public function adopt(string $name): Animal;
        
}

class DogShelter implements AnimalShelter{

    public function adopt(string $name) : Dog {
        return new Dog($name);
    }
}


class CatShelter implements AnimalShelter{

    public function adopt(string $name) : Cat {
        return new Cat($name);
    }
}

$kitty = (new CatShelter) ->adopt("Princy");
$kitty->speak();

$kittu = (new DogShelter) ->adopt("Prince");
$kittu->speak();


?>