<?php

class Product {
    public $brand  = "";
    public $description  = "";
    public $price  = "";

    function __construct($_productData)
    {
        $this->brand = $_productData["brand"];
        $this->description = $_productData["description"];
        $this->price = floatval($_productData["price"]);
    }

    
    public function getBrand(){
        return $this->brand;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getProduct(){
        return $this;
    }
}