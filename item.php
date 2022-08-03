<?php
require_once "my-functions.php";
$name = "playstation 5";
$prix = 899;
$discount = 30;
$img = "imgs/ps5.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
<?php require_once "navbar.php" ?>
<form action="cart.php" method="POST">
    <div class="d-inline">
                <h5>
                    Product Name: <?= $name?>
                </h5>
        <img  src="<?=$img?>" width="250px" height="250px">
        price of product with tax:     <?php formatPrice($prix) ?>
        </p>
        <p>
            price of product without tax:  <?php formatPrice(priceExcludingVAT($prix) ) ?>
        </p>
        <!--Condition Discount-->
        <?php  if ($discount == null){
            echo "<h5 class='text-danger ' >wait for sale</h5>" ;
        } else { ?>
            <p> Discount : <?php formatPrice(discountedPrice($prix, $discount) ) ?></p>
        <?php }?>


        <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="item_name" value="ipad">
        <input type="hidden" name="price" value="1000">
    </div>
</form>
<?php require "footer.php" ?>
</body>
</html>