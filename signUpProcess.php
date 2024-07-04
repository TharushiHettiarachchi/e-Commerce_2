<?php

include "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$email = $_POST["email"];


if (empty($fname)) {
    echo ("Plaese enter your First Name!");
} else if (empty($lname)) {
    echo ("Plaese enter your Last Name!");
} else if (empty($mobile)) {
    echo ("Plaese enter your Mobile Number!");
} else if (strlen($mobile) != 10) {
    echo ("Mobile Number should have 10 digits");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Invalid Mobile Number.");
} else if (empty($password)) {
    echo ("Plaese enter your Password!");
} else if (strlen($password) < 5 || strlen($password) > 10) {
    echo ("Password must have 5 to 10  characters!");
} else if (empty($email)) {
    echo ("Plaese enter your Email!");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email Address.");
} else {

   $customer_rs =  Database::search("SELECT * FROM `customer` WHERE `mobile` = '".$mobile."'");
   $customer_num= $customer_rs->num_rows;
   if($customer_num > 0){
    echo ("Mobile Number already exists.");
   }else{

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");
    Database::iud("INSERT INTO `customer`( `mobile`, `fname`, `lname`, `email`, `password`, `date_joined`,`gender_id`) VALUES('" . $mobile . "','" . $fname . "','" . $lname . "','" . $email . "','" . $password . "','" . $date . "','1')");
    echo("Successfully Signed Up");
   }


}
