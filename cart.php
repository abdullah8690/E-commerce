<?php
require_once "navbar.php";
require_once "my-functions.php";
$kys = $_POST['values'];
$quantity = $_POST['qty'];
$pnam = $_POST["item_name"];
?>

<h5> <?php formatPrice(deliver($kys,$quantity)); ?></h5>



<form action="/action_page.php" id="carform">
    <label for="fname">Firstname:</label>
    <input type="text" id="fname" name="fname">
    <input type="submit">
</form>
<br>

<label for="cars">Choose a car:</label>
<select id="cars" name="carlist" form="carform">
    <option value="bnp">BNP</option>
    <option value="laposte">LA poste</option>
    <option value="amazon">Amazon</option>
    <option value="gaumont">Gaumont</option>
</select>