<?php
$products = ["iphone", "ipad", "imac"];
sort($products);
echo implode(" ", $products) ;
echo $products[0]. " ";
echo $products[2];

print_r($products);