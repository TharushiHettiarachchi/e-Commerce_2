<?php
include "connection.php";
$product_id = $_GET["id"];
session_start();
$user = $_SESSION["u"];

$cart_rs = Database::search("SELECT * FROM `cart` WHERE `customer_mobile` = '".$user["mobile"]."' AND `product_id` = '".$product_id."'");
$cart_data = $cart_rs->fetch_assoc();

$product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '".$product_id."'");
$product_data = $product_rs->fetch_assoc();

$new_price = $product_data["price"] * $cart_data["quantity"];
echo($new_price);
?>