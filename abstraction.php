<?php

interface Animal {
    public function makeSound();

    public function walk();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark!";
    }

    public function walk() {
        echo "Walk!";
    }
}

// Helper
function enter() {
    echo "<br>";
}

$dog1 = new Dog();
$dog1->makeSound();
enter();
$dog1->walk();