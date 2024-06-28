<?php
session_start();
include "connection.php";
if(isset($_SESSION["u"])){

$user = $_SESSION["u"];
$product_id = $_GET["id"];

Database::iud("INSERT INTO `favourite`(`customer_mobile`,`product_id`) VALUES('".$user["mobile"]."','".$product_id."')");
echo("Successfully added");



}else{
    header("location:index.php");
}

?>