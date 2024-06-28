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
    <title>WebShop - My Products</title>
</head>

<body>

    <?php include "adminHeader.php"; ?>
    <div class="row">
        <div class="col s12 cart-title">Orders</div>
    </div>
    <div class="row">
        <div class="col s12 hide-on-med-and-down">
            <div class="row">
                <div class="col s1 grey lighten-2 center-align mypro-head">#</div>
                <div class="col s4 grey lighten-2 center-align mypro-head">Product</div>
                <div class="col s2 grey lighten-2 center-align mypro-head">Date</div>
                <div class="col s1 grey lighten-2 center-align mypro-head">Quantity</div>
                <div class="col s4 grey lighten-2 center-align mypro-head">Status</div>
            </div>
        </div>
        <div class="col s12 teal lighten-5" style="margin-top: 10px;">
            <div class="row">
                <div class="col l1 s12 teal lighten-5 center-align mypro-content">102457</div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content"><img src="Resources/product6.jpg"
                        class="mypro-img" /></div>
                <div class="col l3 s12 teal lighten-5 center-align mypro-content">Cup Cake</div>
                <div class="col l2 s12 teal lighten-5 center-align mypro-content">2024-06-22</div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content">2</div>
                <div class="col l3 s12 teal lighten-5 center-align mypro-content">
                    <div class="row"
                        style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                        <!-- <div class="mypro-status">Ordered</div> -->
                        <div class="mypro-status">Send to packing</div>
                        <!-- <div class="mypro-status1">Delivering</div> -->
                    </div>
                </div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content"></div>
            </div>
        </div>
        <div class="col s12 teal lighten-5" style="margin-top: 10px;">
            <div class="row">
                <div class="col l1 s12 teal lighten-5 center-align mypro-content">102458</div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content"><img src="Resources/product1.jpg"
                        class="mypro-img" /></div>
                <div class="col l3 s12 teal lighten-5 center-align mypro-content">Rye Bread</div>
                <div class="col l2 s12 teal lighten-5 center-align mypro-content">2024-06-22</div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content">1</div>
                <div class="col l3 s12 teal lighten-5 center-align mypro-content">

                    <i class="large material-icons teal-text">done</i>
                              
                </div>
                <div class="col l1 s12 teal lighten-5 center-align mypro-content"><i class="material-icons small teal-text" >delete</i></a></div>
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