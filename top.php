<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="CSS/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- Script Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<!-- Icon -->
<link rel="icon" href="Resources/icon.png">

<?php
include "connection.php";
session_start();
$user = $_SESSION["u"];
?>