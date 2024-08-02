<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
        <nav>
            <div class=" nav-wrapper navbar-background teal-text text-darken-4">
                <ul id="nav-mobile" class="left" style="cursor: pointer;">
                    <li data-target="slide-out" class="sidenav-trigger">
                        <i class="small material-icons">menu</i>
                    </li>
                    <li class="nav-title-word">WebShop</li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down" style="cursor: pointer;">
                    <li>
                        <a href="profile.html">
                            <i class="small material-icons teal-text text-darken-4">account_circle</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="small material-icons teal-text text-darken-4">chat</i>
                        </a>
                    </li>
                  
                    <li><a href="index.html">
                            <i class="small material-icons teal-text text-darken-4">exit_to_app</i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <div id="slide-out" class="sidenav side-box">

            <img class="prof-img-side" src="Resources/prof1.jpg" alt="" />
            <span class="teal-text darken-2-text side-span1">Tharushi Hettiarachchi</span>
            <span class="grey-text lighten-1-text side-span2">tharushihettiarachchi12@gmail.com</span>
            <a class="waves-effect waves-light btn-small side-button1"
                onclick="window.location = 'adminDashboard.php';">
                <i class="material-icons left">home</i>Dashboard</a>
            <a class="waves-effect waves-light btn-small side-button1"
                onclick="window.location = 'manageProduct.php';"><i
                    class="material-icons left">local_grocery_store</i>Manage Products</a>
            <a class="waves-effect waves-light btn-small side-button1" onclick="window.location = 'orders.php';"><i
                    class="material-icons left">favorite</i>Orders</a>
            <a class="waves-effect waves-light btn-small side-button1" onclick="window.location = '#.php';"><i
                    class="material-icons left">local_mall</i>
                Manage Customers</a>
            <a class="waves-effect waves-light btn-small side-button1" onclick="window.location = '#.php';"><i
                    class="material-icons left">payment</i>Payment
                History</a>
            <a class="waves-effect waves-light btn-small side-button1" onclick="window.location = 'profile.php';"><i
                    class="material-icons left">account_circle</i>Profile</a>
            <a class="waves-effect waves-light btn-small side-button1"><i
                    class="material-icons left">chat</i>Messages</a>
          
        </div>


    </div>
</body>
</html>