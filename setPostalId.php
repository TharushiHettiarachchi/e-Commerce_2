
<?php

include "connection.php";

$city = $_GET["id"];

if($city == 0){
    echo("");
}else{
  $city_rs =   Database::search("SELECT * FROM `city` WHERE `id` = '".$city."'");
  $city_data = $city_rs->fetch_assoc();
  echo($city_data["postal_id"]);
}




?>