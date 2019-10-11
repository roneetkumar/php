<?php
include "oct-8.php";

$p1 = new Product("Mouse", 10, 40);
$p2 = new Product("Keyboard", 15, 5);
$p3 = new Product("Monitor", 200, 10);
$p4 = new Product("Speaker", 20, 30);
$p5 = new Product("Laptop", 400, 2);

$AllProducts = [$p1, $p2, $p3, $p4, $p5];

displayProducts($AllProducts);

$p1->set_price(25);
$p2->set_price('p', 0.30);

echo "<br><br>------------After Price Changed----------------<br><br>";

displayProducts($AllProducts);

function displayProducts($AllProducts)
{
    Product::heading();

    foreach ($AllProducts as $OneProduct) {
        echo $OneProduct;
    }

    Product::footer();
}
