<?php
require_once "my-functions.php";
require 'product_list.php';
global $products;
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
<!--this is my navbar-->
<?php require_once "navbar.php"; ?>

<div class="container-fluid row">
    <?php foreach ($products as $kys => $value) { ?>

    <div class="col-lg-3 m-5">

        <div class="card">
            <img src="<?= $value["picture"] ?>" width="250px" height="250px">
            <div class="card-body">
                <h5 class="card-title">Product Name : <?= $value["name"] ?></h5>
                <p class="card-text">Product Price with tax
                    :<?php formatPrice($value['price']) ?></p>
                <p class="card-text">Product Price without tax
                    :<?php formatPrice(priceExcludingVAT($value['price'])) ?></p>
                <?php if ($value["discount"] == null) {
                    echo "<h5 class='text-danger ' >wait for sale</h5>";
                } else { ?>
                    <p> Discount : <?php formatPrice(discountedPrice($value['price'], $value["discount"])) ?></p>
                <?php } ?>
                <form action="viewCart.php" method="POST">
                    <label for="quantity">Quantity :</label>
                    <input type="number" name="qty" min="1" max="5">
                    <input type="hidden" name="item_name" value=" <?= $value["name"] ?>">
                    <input type="hidden" name='price' value=" <?= $value["price"] ?>">
                    <input type="hidden" name='weight' value=" <?= $value["weight"] ?>">
                    <button type="submit" name="add_to_cart"
                    " class="btn btn-info">Add To Cart</button>
                </form>
            </div>
        </div>

    </div>
</div>
<?php }; ?>
</div>


<!--this is my footer-->
<?php require "footer.php" ?>
</body>
</html>
