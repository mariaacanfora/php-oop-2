c<?php
require_once __DIR__ . "/Product.php";

class ProductClothes extends Product {

    protected $color = "";
    protected $size = "";

    public function setClothesProperty($colorValue, $sizeValue){
        $this->color = $colorValue;
        $this->size = $sizeValue;
    }

}