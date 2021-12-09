<?php

require_once __DIR__ . "/../traits/CartTraits.php";
require_once __DIR__ . "/../traits/PaymentMethods.php";
class User{

    protected $userName = "";
    protected $userSurname = "";


    protected $totalPrice;
    use CartTrait;
    use PaymentMethods;

    function __construct($name, $surname)
    {
        /* $this->userName = $name;
        $this->userSurname = $surname; */

        $this->setUserData($name, $surname);
    }

    public function getUserData(){
        return $this->userName . " " . $this->userSurname;
    }


    protected function setUserData($_name, $_surname){

        if (preg_match('~[0-9]+~', $_name) || preg_match('~[0-9]+~', $_surname)) {
            throw new Exception("I dati dell'utente non possono contenere caratteri numerici");
        }

        $this->userName = $_name;
        $this->userSurname = $_surname;
    }



    public function addPaymentMethods($_method){

        if (!array_key_exists($_method, $this->paymentMethods)) {
            throw new Exception("Il metodo di pagamento inserito non è disponibile!");
        }

        foreach ($this->paymentMethods as $method => $bool) {
            if ($method === $_method) {
                $this->paymentMethods[$method] = true;
            } else{
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