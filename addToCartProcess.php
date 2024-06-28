<?php
session_start();
include "connection.php";
if(isset($_SESSION["u"])){

$user = $_SESSION["u"];
$product_id = $_GET["id"];

Database::iud("INSERT INTO `cart`(`customer_mobile`,`product_id`,`quantity`) VALUES('".$user["mobile"]."','".$product_id."','1')");
echo("Successfully added");



}else{
    header("location:index.php");
}

?>