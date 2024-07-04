<?php

include "connection.php";
session_start();
$user - $_SESSION["u"];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$line1 = $_POST["line1"];
$line2 = $_POST["line2"];
$city = $_POST["city"];




?>