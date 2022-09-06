<?php
include "cart.php";
$con = mysqli_connect("localhost","abdullah","123456",'playground');



$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];



addOrderProduct($con, $product_id, $quantity);
getLastOrderId( $con);




//Ajoute une ligne à la BD dans la table orders


//Besoin d'une fonction pour récupérer order_id

//$lastOrderId=getLastOrderId($db)[0]['id'];
//var_dump($lastOrderId);

//Ajoute une ligne à la BD dans la table order_product
//addOrderProduct($db, $lastOrderId, $product_id, $quantity);