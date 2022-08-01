<?php
function formatPrice(int $param): void {
    $param = $param/100;
    echo number_format($param,2) . " €";
}

function priceExcludingVAT(int $priceTAX, int $tva = 20 ) :int{
    return ((100*$priceTAX)/(100+$tva)) ;
}
function discountedPrice($priceTAX, $discount): int
{

    return (($priceTAX * 100) / (100 + $discount));
}






//function formatPrice(int $param): void{
//    $param = $param/100;
//    echo number_format($param, 2) . "€" ;
//}
//function priceExcludingVAT(int $prixTTC, int $tva = 20): int{
//    return ((100$prixTTC)/(100+$tva));
//}
//function discountedPrice($prixTTC, $discount): int{
//
//    return (($prixTTC100)/(100+$discount));
