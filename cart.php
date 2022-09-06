<?php
session_start();

$database_name = "playground";
$con = mysqli_connect("localhost","abdullah","123456",$database_name);

if (isset($_POST["add"] )){
    if (isset($_SESSION["cart"] )){
        $item_array_id = array_column($_SESSION["cart"] ,"product_id");
        if (!in_array($_GET["id"], $item_array_id )){
            $count = count($_SESSION["cart"] );
            $item_array = array(
                "product_id" => $_GET["id"],
                "item_name" => $_POST["hidden_name"],
                "product_price" => $_POST["hidden_price"],
                "item_quantity" => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script> window.location="cart.php" </script> ';
        }else{
            echo '<script> alert("Product is already Added to Cart") </script>';
            echo '<script> window.location="cart.php" </script> ';
        }
    }else{
        $item_array = array(
            "product_id" => $_GET["id"],
            "item_name" => $_POST["hidden_name"],
            "product_price" => $_POST["hidden_price"],
            "item_quantity" => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}
if (isset($_GET["action"] )){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value ){
            if ($value["product_id"] == $_GET["id"] ){
                unset($_SESSION["cart"][$keys] );
                echo '<script> alert("Product has been Removed") </script>';
                echo '<script> window.location="cart.php" </script> ';
            }
        }
    }
}
?>
<?php
require_once "header.php";
?>
<body>

<div class="container row" style="width: 100%">
    <h2>Shopping Cart</h2>
    <?php
    $query = "SELECT * FROM products ORDER BY id ASC ";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result)>1){
        while ($row = mysqli_fetch_array($result)){

            ?>
            <div class="col-md-3">
                <form method="post" action="checkout.php?action=add&id=<?php echo $row["id"] ?>">
                    <div class="product">
                        <img src="<?php echo $row["image"]?>" class="img-fluid">
                        <h5 class="text-info"><?php echo $row ['name'];?> </h5>
                        <h5 class="text-danger"><?php echo $row ['price'];?> </h5>
                        <input type="number" name="quantity" class="form-control" value="1">
                        <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?> ">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?> ">
                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="add to cart">
                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>

    <div style="clear: both"> </div>
    <h3 class="title2">Shopping Cart </h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="30%"> Product Name</th>
                <th width="10%"> Quantity </th>
                <th width="13%"> Price Details</th>
                <th width="10%"> Total Price</th>
                <th width="17%"> Remove Item</th>
            </tr>

            <?php
            if (!empty($_SESSION["cart"] )){
                $total = 0;
                foreach ($_SESSION["cart"] as $keys => $value ){
                    ?>
                    <tr>
                        <td><?php echo $value["item_name"];?> </td>
                        <td><?php echo $value["item_quantity"];?> </td>
                        <td><?php echo $value["product_price"];?> </td>
                        <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"],2 );?> </td>
                        <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"];?>"> <span class="text-danger"> Remove Item</span> </a> </td>
                    </tr>
                    <?php
                    $total = $total + ($value["item_quantity"] * $value ["product_price"]);
                }

                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <th align="right" >$ <?php echo number_format($total, 2);?> </th>
                    <td></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

</div>



        <form method="post" action="checkout.php">
            <label for="quantity"> Quantité :</label>
            <input type="number" name="quantity" min="0" max="10">
            <input type="hidden" name="product_id" value="<?= $row["id"] ?>">
            <input type="submit" value="Add to cart">
            <hr>
        </form>



        <hr>


    </div>

</body>
</html>
