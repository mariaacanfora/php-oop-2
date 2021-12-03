<?php
require_once __DIR__ . "/classes/ProductTech.php";
require_once __DIR__ . "/classes/ProductClothes.php";
require_once __DIR__ . "/data/poducts.php";

$productsTechList = [];
$productsClothesList = [];

foreach ($poductsList as $type => $typeListProducts) {
    echo "<h1>" . $type . "</h1>";
    foreach ($poductsList[$type] as $prop => $item) {
        echo "<h3>" . $prop . "</h3>";
        if ($type === "tech") {
            $product = new ProductTech($item);
            $product->setTechProperty($item["version"], $item["year"]);
            var_dump($product);
            $productsTechList[] = $product;
        } else if ($type === "clothes") {
            $product = new ProductClothes($item);
            $product->setClothesProperty($item["color"], $item["size"]);
            var_dump($product);
            $productsClothesList[] = $product;
        }
    }
}

