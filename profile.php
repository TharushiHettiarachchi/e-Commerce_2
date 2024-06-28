<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Resources/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>WebShop - Dashboard</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="row" style="padding: 8px; padding-top: 0px; padding-bottom: 10px;">

        <div class="col l4 s12 " style="padding-right: 20px;">
            <div class="row">
                <div class="col s12 cart-title">Profile</div>
            </div>
            <div class="row  profile-div teal lighten-4" style="display: flex; align-items: center; justify-content: center; height: 80vh; flex-direction: column;">
                <div class="profile-profile-img" style="background-image: url('Resources/prof1.jpg');"></div>
                <div class="col s12 prof-name center-align teal-text">Tharushi Hettiarachchi</div>
                <div class="col s12 prof-email center-align">tharushihettiarachchi12@gmail.com</div>

            </div>


        </div>
        <div class="col l8 s12 profile-div" style="padding: 20px; padding-top: 0px;">
            <div class="row">
                <div class="col s12 prof-form">Personal Details</div>
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="mobile" type="text" class="validate">
                    <label for="mobile">Mobile Number</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" type="text" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <input id="dj" type="text" class="validate">
                    <label for="dj">Date Joined</label>
                </div>
                <div class="input-field col s6">
                    <input id="gender" type="text" class="validate">
                    <label for="gender">Gender</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 prof-form">Login Details</div>
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>

            </div>
            <div class="row">
                <div class="col s12 prof-form">Billing Details</div>
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Address Line 1</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Address Line 2</label>
                </div>
                <div class="input-field col s6">
                    <input id="mobile" type="text" class="validate">
                    <label for="mobile">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" type="text" class="validate">
                    <label for="email">Postal Code</label>
                </div>

            </div>
            <div class="col s12">
                <a class="waves-effect waves-light btn-small cart-button1">SAVE </a>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {});
        });
    </script>
    <script src="script.js"></script>



</body>

</html>