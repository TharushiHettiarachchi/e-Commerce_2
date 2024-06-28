<?php
include "connection.php";
session_start();
$user = $_SESSION["u"];

$total=0;

$cart_rs = Database::search( "SELECT * FROM `cart` WHERE `customer_mobile` = '".$user["mobile"]."' ");
$cart_num = $cart_rs->num_rows;
for($i=0; $i<$cart_num; $i++){
    $cart_data = $cart_rs->fetch_assoc();
    $product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '".$cart_data["product_id"]."'");
    $product_data = $product_rs->fetch_assoc();
    
    $total = $total+ ($product_data["price"] * $cart_data["quantity"]);
    
}
echo($total);
?>