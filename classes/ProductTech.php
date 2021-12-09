<?php
require_once __DIR__ . "/Product.php";

class ProductTech extends Product {
    public $version = "";
    public $year = "";

    function __construct($_item)
    {
        parent::__construct($_item);
        $this->version = $_item["version"];
        $this->year = $_item["year"];
    }

    /* public function setTechProperty($versionValue, $yearValue){
        $this->version = $versionValue;
        $this->year = $yearValue;
    } */

    public function getVersion(){
        return $this->version;
    }

    public function getYear(){
        return $this->year;
    }

    
};