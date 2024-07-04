<?php
include "connection.php";
session_start();

$user = $_SESSION["u"];


Database::iud("DELETE  FROM `favourite` WHERE `customer_mobile` = '".$user["mobile"]."'");
echo("Successfully Removed");

?>