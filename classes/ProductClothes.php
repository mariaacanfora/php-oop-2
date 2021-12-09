c<?php
require_once __DIR__ . "/Product.php";

class ProductClothes extends Product {

    public $color = "";
    public $size = "";

    function __construct($_item)
    {
        parent::__construct($_item);
        $this->color = $_item["color"];
        $this->size = $_item["size"];
    }

}