<?php
include "connection.php";
session_start();

$mobile = $_POST["mobile"];
$password = $_POST["password"];


if (empty($mobile)) {
    echo ("Plaese enter your Mobile Number!");
} else if (strlen($mobile) != 10) {
    echo ("Mobile Number should have 10 digits");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Invalid Mobile Number.");
} else if (empty($password)) {
    echo ("Plaese enter your Password!");
} else if (strlen($password) < 5 || strlen($password) > 10) {
    echo ("Password must have 5 to 10  characters!");
} else {
    $customer_rs =  Database::search("SELECT * FROM `customer` WHERE `mobile` = '" . $mobile . "' AND `password` = '" . $password . "'");
    $customer_num = $customer_rs->num_rows;
    if ($customer_num == 0) {
        echo ("Invalid Mobile Number or Password");
    } else {
        $customer_data = $customer_rs->fetch_assoc();
        $_SESSION["u"]  =  $customer_data;
        echo("Successfully Signed In");
    }
}
