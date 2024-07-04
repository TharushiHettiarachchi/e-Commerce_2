<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
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


    <title>WebShop</title>
</head>

<body class="m-0 p-0 body1">

    <div class="row p-0 m-0">
        <div class="col s12 p-0 m-0 login-background">

            <div class="login-box" id="signIn">
                <div class="login-title">SIGN IN</div>
                <div class="login-input-box">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="mobiles" type="text" class="validate">
                            <label for="mobiles">Mobile Number</label>
                        </div>
                    </div>
                </div>
                <div class="login-input-box">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn login-button" onclick="signInProcess();">SIGN IN</a>
                <a class="teal-text lighten-2 login-link" onclick="signIn();">Don't have an account? Sign Up</a>
            </div>
            <div class="login-box1" id="signUp">
                <div class="login-title">SIGN UP</div>
                <div class="login-input-box">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="login-input-box">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="mobile" type="text" class="validate">
                            <label for="mobile">Mobile Number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="passwords" type="password" class="validate">
                            <label for="passwords">Password</label>
                        </div>
                    </div>
                </div>
                <div class="login-input-box">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="emails" type="email" class="validate">
                            <label for="emails">Email</label>
                        </div>
                    </div>
                </div>
                <a class="waves-effect waves-light btn login-button" onclick="signUpProcess();">SIGN UP</a>
                <a class="teal-text lighten-2 login-link" onclick="signUp();">Have an account? Sign In</a>
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal" onclick="window.location='adminSignIn.html';">
                    <i class="large material-icons">supervisor_account</i>
                </a>


            </div>
        </div>

    </div>
   
   <?php include "bottom.php"; ?>
</body>

</html>