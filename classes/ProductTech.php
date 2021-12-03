<?php
require_once __DIR__ . "/Product.php";

class ProductTech extends Product {
    protected $version = "";
    protected $year = "";

    /* function __construct($_techProperty, $_productData)
    {
        parent::__construct($_productData);
        $this->version = $_techProperty["version"];
        $this->year = $_techProperty["year"];
    } */

    public function setTechProperty($versionValue, $yearValue){
        $this->version = $versionValue;
        $this->year = $yearValue;
    }
};