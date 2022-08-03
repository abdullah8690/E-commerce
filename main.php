<?php
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

<div class="container">
    <div class="row">
        <div class="col-lg-3 m-5">
            <form action="cart.php" method="POST">
                <div class="card" >
                    <img src="imgs/ps5.jpg" class="card-img-top" alt="image ps5">
                    <div class="card-body">
                        <h5 class="card-title">Product Name :  Ps5</h5>
                        <p class="card-text">Product Price : 899 €</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="item_name" value="playstation">
                        <input type="hidden" name="price" value="899">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-5">
            <form action="cart.php" method="POST">
                <div class="card" >
                    <img src="imgs/ps5.jpg" class="card-img-top" alt="image ps5">
                    <div class="card-body">
                        <h5 class="card-title">Product Name :  Ipad</h5>
                        <p class="card-text">Product Price : 1000 €</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="item_name" value="ipad">
                        <input type="hidden" name="price" value="1000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 m-5">
            <form action="cart.php" method="POST">
                <div class="card" >
                    <img src="imgs/ps5.jpg" class="card-img-top" alt="image ps5">
                    <div class="card-body">
                        <h5 class="card-title">Product Name :  Iphone</h5>
                        <p class="card-text">Product Price : 1200 €</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="item_name" value="iphone">
                        <input type="hidden" name="price" value="1200">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>










<!--this is my footer-->
<?php require "footer.php" ?>
</body>
</html>