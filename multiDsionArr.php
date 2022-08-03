<?php
require_once "my-functions.php";
$products =[
    "iphone" =>[
        "name" => "iphone",
        "price" => 12000,
        "weight" => 200,
        "discount" => 30,
        "picture" =>"imgs/2017.png"
    ],

    "imac" =>[
        "name" => "imac",
        "price" => 22000,
        "discount" => null,
        "weight" => 1200,
        "picture" =>"imgs/imac_16-9.png"
    ],

    "ipad" =>[
        "name" => "ipad",
        "price" => 18000,
        "discount" => 10,
        "weight" => 500,
        "picture" =>"imgs/ipad2.png"
    ],
    "playstation "=>[
        "name" => "ps 5",
        "price" => 80099,
        "discount" => null,
        "weight" => 4000,
        "picture" => "imgs/ps5.jpg"
    ],
//
//    "iphone2" =>[
//        "name" => "iphone X Pro",
//        "price" => 900,
//        "discount" => 30,
//        "weight" => 200,
//        "picture" =>"https://image.made-in-china.com/155f0j00pWKRACMafbov/Original-Unlocked-A-Grade-High-Quality-Smart-Phone-New-Used-Smart-Phone-64GB-128GB-256GB-for-iPhone-X-iPhone-Xs-Xr-PRO-11.jpg"
//    ],
//
//    "imac2" =>[
//        "name" => "imac Pro",
//        "price" => 2200,
//        "discount" => null,
//        "weight" => 1200,
//        "picture" =>"https://img.macg.co/2017/12/macgpic-1513265661-29056504958379-sc-jpt.jpg"
//    ],
//
//    "ipad2" =>[
//        "name" => "ipad Galaxy",
//        "price" => 1100,
//        "discount" => 30,
//        "weight" => 500,
//        "picture" =>"https://www.presse-citron.net/app/uploads/2020/04/TEst-Magic-Keyboard-iPad-Pro-1000x600.jpg"
//    ],
//    "playstation2 "=>[
//        "name" => "ps 4",
//        "price" => 899,
//        "discount" => 30,
//        "weight" => 4000,
//        "picture" => "https://chocobonplan.com/wp-content/uploads/2020/08/ps4-pro-avec-2-jeux-offerts-predator-last-of-us-2-300x300.png"
//    ],
//
//    "iphone3" =>[
//            "name" => "Ipirateur",
//            "price" => 600,
//        "discount" => null,
//            "weight" => 200,
//            "picture" =>"https://www.delcourt.fr/6690-large_default/aspirateur-industriel-poussieres-toxiques-gs-2-62-h.jpg"
//    ],
//
//    "imac3" =>[
//        "name" => "PC Portable",
//        "price" => 2200,
//        "discount" => 30,
//        "weight" => 1200,
//        "picture" =>"https://m.media-amazon.com/images/I/61aTywrhyBS._AC_SX425_.jpg"
//    ],
//
//    "ipad3" =>[
//        "name" => "Pc Fix",
//        "price" => 1500,
//        "discount" => 30,
//        "weight" => 500,
//        "picture" =>"https://www.rueducommerce.fr/media/produits/vibox/i-28-pc-gamer-4785684-258588_8_1140x1140.jpg"
//    ],
//    "playstation3 "=>[
//        "name" => "Ninten Switch",
//        "price" => 299,
//        "discount" => null,
//        "weight" => 400,
//        "picture" => "https://cdn.pocket-lint.com/r/s/970x/assets/images/157862-games-review-hands-on-nintendo-switch-oled-model-review-the-switch-to-rule-them-all-image1-onw8cdg7sm.jpg"
//    ],


];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php require_once "navbar.php"; ?>

<div class="container-fluid row">
    <?php foreach ($products as $kys =>$value) { ?>
         <div class="col-3">

            <h5>
                Product Name: <?= $value["name"]?>
            </h5>
            <img  src="<?=$value["picture"]?>" width="250px" height="250px">

            <h4>
                <small> <s> 600 €</s> </small>
            </h4>

            <button type="submit" class="btn btn-primary">
                add to cart <i class="fas fa-shopping-cart"></i>
            </button>
            <p class="h6 ">
                price of product with tax:     <?php formatPrice($value['price']) ?>
            </p>
            <p>
                price of product without tax:  <?php formatPrice(priceExcludingVAT($value['price']) ) ?>
            </p>
            <!--Condition Discount-->
            <?php  if ($value["discount"] == null){
                echo "<h5 class='text-danger ' >wait for sale</h5>" ;
            } else { ?>
                <p> Discount : <?php formatPrice(discountedPrice($value['price'], $value["discount"]) ) ?></p>
            <?php }?>

            <p>
                Product weight :            <?= $value["weight"] ?> g</p>
            <br>
            <br>
        </div>

    <?php }; ?>
    <!--end of div container-fluid-->
</div>

<!--this my footer-->
<?php require "footer.php" ?>
</body>
</html>
