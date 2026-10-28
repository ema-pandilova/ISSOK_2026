<?php

$products = [
    ["name" => "Keyboard", "price" => 30, "inStock" => true],
    ["name" => "Mouse", "price" => 15, "inStock" => false],
    ["name" => "Monitor", "price" => 120, "inStock" => true],
    ["name" => "USB Cable", "price" => 8, "inStock" => false],
];

function getAvailableProducts($products)
{
    $available = array_filter($products, fn($pr) => $pr["inStock"] == true);
    return array_column($available, "name");
}

$availableProducts = getAvailableProducts($products);
echo "Available products: " . implode(", ", $availableProducts);

