<?php

abstract class Animal {
    protected $name;

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!";
    }
}

// Helper
function enter() {
    echo "<br>";
}

$animal1 = new Animal();

$dog1 = new Dog();
$dog1->makeSound();
enter();