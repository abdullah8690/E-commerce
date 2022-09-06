<?php
$database_name = "playground";
$con = mysqli_connect("localhost","abdullah","123456",$database_name);

function checkout(PDO $con){
    $customer_id = rand(1, 3);
    $query = "INSERT INTO orders (customer_id, date) VALUES ('$customer_id', CURDATE())";
    $con->query($query);
    echo "Order created successfully";
}



function addOrderProduct(PDO $con,$product_id, $quantity ):void{
    $query = "INSERT INTO order_product (order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')";
    $sql = $con->prepare($query);
    $sql->execute();

}

function getLastOrderId(PDO $con):array{
    $query = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $sql = $con->prepare($query);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
