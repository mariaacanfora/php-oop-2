<?php
require_once __DIR__ . "/classes/ProductTech.php";
require_once __DIR__ . "/classes/ProductClothes.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPrime.php";
require_once __DIR__ . "/data/poducts.php";

$productsTechList = [];
$productsClothesList = [];

foreach ($poductsList as $type => $typeListProducts) {
    echo "<h1>" . $type . "</h1>";
    foreach ($poductsList[$type] as $prop => $item) {
        echo "<h3>" . $prop . "</h3>";
        if ($type === "tech") {
            $product = new ProductTech($item);
            var_dump($product);
            $productsTechList[] = $product;
        } else if ($type === "clothes") {
            $product = new ProductClothes($item);
            var_dump($product);
            $productsClothesList[] = $product;
        }
    }
}


$user1 = new UserPrime("Mario", "Rossi");
$user1 ->addToCart($productsTechList[2], $productsClothesList[2]);
echo "<h1 style='color: red;'> Carrello di " . $user1->getUserData() . "</h1>";
$cart = $user1->getCartList();

foreach ($cart as $key => $item) {
    var_dump($item);
}

echo "<h3 style='color: blue;'> Totale: " . $user1->getTotal() . "</h3>";
echo "<h3 style='color: green;'> Totale riservato ad utenti prime (20% di sconto):  " . $user1->getScountPrime();








