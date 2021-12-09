<?php
require_once __DIR__ . "/classes/ProductTech.php";
require_once __DIR__ . "/classes/ProductClothes.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPrime.php";
require_once __DIR__ . "/data/poducts.php";

$productsTechList = [];
$productsClothesList = [];

//generate lists of products based on their type
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

var_dump($productsTechList);
var_dump($productsClothesList);



$user1 = new UserPrime("Mario", "Rossi");
$user1->addToCart($productsTechList[2], $productsClothesList[2]);
echo "<h1 style='color: red;'> Carrello di " . $user1->getUserData() . "</h1>";
$cart = $user1->getCartList();
$user1->addPaymentMethods("cash");

foreach ($cart as $key => $item) {
    //var_dump($item);
    echo "<h3 style='margin: 0'> Prodotto ". $key + 1 ."</h3>";
    echo "<ul style='margin: 0'>";
    foreach ($item as $name => $value) {
        if ($name === "price") {
            echo "<li>" . $name . ": " . $value. "€</li>";
        } else {
            echo "<li>" . $name . ": " . $value. "</li>";
        }
        
    }
    echo "</ul>";
}

echo "<h3 style='color: blue;'> Totale: " . $user1->getTotal() . "</h3>";
echo "<h3 style='color: green;'> Totale riservato ad utenti prime (20% di sconto):  " . $user1->getScountPrime() . "</h3>";
foreach ($user1->getPaymentMethods() as $method => $bool) {
    if ($bool) {
        echo "<h4 style='font-style: italic'> Metodo di pagamento: " . $method . "</h4>";
    }
}










