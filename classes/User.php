<?php

require_once __DIR__ . "/../traits/cartTraits.php";
class User{

    protected $userName = "";
    protected $userSurname = "";
    
    protected $paymentMethods = [
        "creditCard" => true,
        "payPal" => false ,
        "cash" => false
    ];

    protected $totalPrice;
    use CartTrait;
    //protected $cart = [];

    function __construct($name, $surname)
    {
        $this->userName = $name;
        $this->userSurname = $surname;
    }

    public function getUserData(){
        return $this->userName . " " . $this->userSurname;
    }

    /* public function addToCart(...$_product){
        $this->cart = $_product;
    }

    public function getCartList(){
        return $this->cart;
    } */

    public function addPaymentMethods($_method){
        foreach ($this->paymentMethods as $method => $bool) {
            if ($method === $_method) {
                $this->paymentMethods[$method] = true;
            } else {
                $this->paymentMethods[$method] = false;
            }
        }
    }

    
    public function getPaymentMethods(){
        return $this->paymentMethods;
    }

    public function getTotal(){
        foreach ($this->cart as $key => $item) {
            $this->totalPrice += $item->price;
        }

        return $this->totalPrice . "€"; 
    }

    public function getPropertyPurchase($val){
        return $this->cart;
    }

}