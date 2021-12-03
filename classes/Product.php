<?php

class Product {
    protected $brand  = "";
    protected $description  = "";
    protected $price  = "";

    function __construct($_productData)
    {
        $this->brand = $_productData["brand"];
        $this->description = $_productData["description"];
        $this->price = $_productData["price"];
    }
}