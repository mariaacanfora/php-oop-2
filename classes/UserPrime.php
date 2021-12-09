<?php
require_once __DIR__ . "/User.php";

class UserPrime extends User {
    
    function __construct($name, $surname)
    {
        parent::__construct($name, $surname);
    }

    public function getScountPrime(){
        return $this->totalPrice * 0.8 . "€";
    }
}