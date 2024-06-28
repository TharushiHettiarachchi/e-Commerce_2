<?php
include "connection.php";
session_start();
$user = $_SESSION["u"];

$qty = $_POST["qty"];
$product_id = $_POST["id"];

$product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '".$product_id."'");
$product_data = $product_rs->fetch_assoc();

if($product_data["quantity"] == 0){
    echo("Out of Stock");
}elseif($qty == 1){
    echo("Minimum Qunatity Reached");
    Database::iud("UPDATE `cart` SET `quantity` = '".$qty."' WHERE `product_id` = '".$product_id."' AND `customer_mobile` = '".$user["mobile"]."'");

}
else if($qty <= $product_data["quantity"]){
    Database::iud("UPDATE `cart` SET `quantity` = '".$qty."' WHERE `product_id` = '".$product_id."' AND `customer_mobile` = '".$user["mobile"]."'");

}else{
   
    // Database::iud("UPDATE `cart` SET `quantity` = '".$product_data["qunatity"]."' WHERE `product_id` = '".$product_id."' AND `customer_mobile` = '".$user["mobile"]."'");
    echo("Maximum available qunatity reached");
}



?>