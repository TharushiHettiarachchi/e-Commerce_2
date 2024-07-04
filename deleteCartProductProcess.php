<?php
include "connection.php";
session_start();

$user = $_SESSION["u"];
$product_id = $_GET["id"];

Database::iud("DELETE  FROM `cart` WHERE `customer_mobile` = '".$user["mobile"]."' AND `product_id` = '".$product_id."'");
echo("Successfully Removed");

?>