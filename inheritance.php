<?php

class User {
    public $name = "Unknown";

    public function login() {
        echo "Welcome, " . $this->name . "!";
    }

    public function logout() {
        echo "See you, " . $this->name . "!";
    }
}

class Student extends User {
    public $nim;
}

// Helper
function enter() {
    echo "<br>";
}

$user1 = new User();
$user1->name = "Tiara";
$user1->login();
enter();
$user1->logout();