<?php
$name = "playstation 5";
$prix = 899;
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
    <div>
        <h5>  Product Name: <?=  $name?></h5>
        <img src="<?= $img ?>" width="250px" height="250px">
        <p> price of product <?="${prix} €" ?></p>
    </div>

<?php require "footer.php" ?>
</body>
</html>