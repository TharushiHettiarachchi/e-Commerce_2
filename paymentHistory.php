<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="icon" href="Resources/icon.png">
    <title>WebShop - Payment History</title>
</head>

<body>

<?php include "adminHeader.php"; ?>
    <div class="row">
        <div class="col s12 cart-title">Payment History</div>
    </div>
    <div class="row">
        <div class="col s12 hide-on-med-and-down">
            <div class="row">
                <div class="col s2 grey lighten-2 center-align mypro-head">#</div>
                <div class="col s2 grey lighten-2 center-align mypro-head">Date</div>
                <div class="col s2 grey lighten-2 center-align mypro-head">Quantity</div>
                <div class="col s2 grey lighten-2 center-align mypro-head">Price</div>
                <div class="col s4 grey lighten-2 center-align mypro-head">Status</div>
            </div>
        </div>
        <div class="col s12 teal lighten-5" style="margin-top: 10px;">
            <div class="row">
                <div class="col l1 s12 teal lighten-5 center-align payhis-content"><i
                        class="material-icons small teal-text">insert_drive_file</i></div>
                <div class="col l1 s12 teal lighten-5 center-align payhis-content">102457</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">2024-06-21 21:23:00</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">3</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">Rs. 3500.00</div>
                <div class="col l3 s12 teal lighten-5 center-align payhis-content">Cash</div>
                <div class="col l1 s12 teal lighten-5 center-align payhis-content"><i
                        class="material-icons small teal-text">delete</i></div>
            </div>
        </div>
        <div class="col s12 teal lighten-5" style="margin-top: 10px;">
            <div class="row">
                <div class="col l1 s12 teal lighten-5 center-align payhis-content"><i
                        class="material-icons small teal-text">insert_drive_file</i></div>
                <div class="col l1 s12 teal lighten-5 center-align payhis-content">102457</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">2024-06-21 21:23:00</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">3</div>
                <div class="col l2 s12 teal lighten-5 center-align payhis-content">Rs. 3500.00</div>
                <div class="col l3 s12 teal lighten-5 center-align payhis-content">Cash</div>
                <div class="col l1 s12 teal lighten-5 center-align payhis-content"><i
                        class="material-icons small teal-text">delete</i></div>
            </div>
        </div>


    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {});
        });




    </script>
    <script src="script.js"></script>

</body>

</html>