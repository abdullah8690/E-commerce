<?php
$products =[
    "iphone" =>[
    "Name" => "iphone",
    "price" => 1200,
    "weight" => 200,
    "picture" =>"imgs/2017.png"
    ],

"imac" =>[
    "Name" => "imac",
    "price" => 2200,
    "weight" => 1200,
    "picture" =>"imgs/imac_16-9.png"
    ],

"ipad" =>[
    "Name" => "ipad",
    "price" => 1800,
    "weight" => 500,
    "picture" =>"imgs/ipad2.png"
    ],
    "playstation "=>[
    "Name" => "ps 5",
    "price" => 899,
    "weight" => 4000,
    "picture" => "imgs/ps5.jpg"
    ],

    "iphone2" =>[
    "Name" => "iphone",
    "price" => 1200,
    "weight" => 200,
    "picture" =>"imgs/2017.png"
    ],

"imac2" =>[
    "Name" => "imac",
    "price" => 2200,
    "weight" => 1200,
    "picture" =>"imgs/imac_16-9.png"
    ],

"ipad2" =>[
    "Name" => "ipad",
    "price" => 1800,
    "weight" => 500,
    "picture" =>"imgs/ipad2.png"
    ],
    "playstation2 "=>[
    "Name" => "ps 5",
    "price" => 899,
    "weight" => 4000,
    "picture" => "imgs/ps5.jpg"
    ],

    "iphone3" =>[
        "Name" => "iphone",
        "price" => 1200,
        "weight" => 200,
        "picture" =>"imgs/2017.png"
    ],

    "imac3" =>[
        "Name" => "imac",
        "price" => 2200,
        "weight" => 1200,
        "picture" =>"imgs/imac_16-9.png"
    ],

    "ipad3" =>[
        "Name" => "ipad",
        "price" => 1800,
        "weight" => 500,
        "picture" =>"imgs/ipad2.png"
    ],
    "playstation3 "=>[
        "Name" => "ps 5",
        "price" => 899,
        "weight" => 4000,
        "picture" => "imgs/ps5.jpg"
    ]


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
<?php require_once "navbar.php" ?>

<div class="container-fluid col-12 d-flex">
    <?php foreach ($products as $value =>$v2) { ?>
   <div class="col-3">

              <h5>  Product Name:       <?= $v2["Name"]?>   </h5>
              <img  src="               <?= $v2["picture"]?>" width="250px" height="250px">
              <p>   price of product :  <?= $v2['price'] . " €" ?></p>
              <p>   Product weight :    <?= $v2["weight"] ?> g</p>

   </div>
    <?php }; ?>
    <!--end of div container-fluid-->
</div>

<!--this my footer-->
<?php require "footer.php" ?>
</body>
</html>
