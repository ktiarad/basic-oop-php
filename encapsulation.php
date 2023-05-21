<?php

class User {
    public $email;
    private $password;

    public function setPassword($password) {
        $this->password = $password;
        $this->hashPassword();
    }

    public function hashPassword() {
        $this->password = sha1($this->password);
    }

    public function getPassword() {
        echo $this->password;
    }
}

// Helper
function enter() {
    echo "<br>";
}

$user1 = new User();
$user1->setPassword("admin123456");
$user1->getPassword();