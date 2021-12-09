<?php

trait CartTrait{
    protected $cart = [];

    public function addToCart(...$_product){
        $this->cart = $_product;
    }

    public function getCartList(){
        return $this->cart;
    }

}