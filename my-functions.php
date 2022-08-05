<?php

function formatPrice(int $param): void
{
    $param = $param / 100;
    echo number_format($param, 2) . " €";
}

function priceExcludingVAT(int $priceTAX, int $tva = 20): int
{
    return ((100 * $priceTAX) / (100 + $tva));
}

function discountedPrice($priceTAX, $discount): int
{
    return (($priceTAX * 100) / (100 + $discount));
}

function total($price, $quantity)
{
    return $price * $quantity;
}


function checkMyQty(int $quantity): void
{
    if ($quantity <= 0) {
        header('Location: error.php');
    }
}

function isQuantityValid(int $quantity): bool
{
    return $quantity > 0;
}
function shippingChargeCalcul(string $deliveryboy, float $priceTotal, int $weight): float
{
    var_dump($weight);
    $priceCharge=0;
    switch ($deliveryboy) {

        case "LA poste":
            if ($weight <= 500) {
                $priceCharge=5;
            } elseif ($weight <= 2000) {
                $priceCharge=$priceTotal * 0.1;
            }
        break;

        case "Amazon":
            if ($weight <= 500) {
                $priceCharge=10;
            } elseif ($weight<=2000) {
                $priceCharge=$priceTotal * 0.1;
            }
            break;
    }
    return $priceCharge;
}