<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "top.php"; ?>
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
                <div class="col s12 prof-name center-align teal-text"><?php echo ($user["fname"] . " " . $user["lname"]); ?></div>
                <div class="col s12 prof-email center-align"><?php echo ($user["email"]); ?></div>

            </div>


        </div>
        <div class="col l8 s12 profile-div" style="padding: 20px; padding-top: 0px;">
            <div class="row">
                <div class="col s12 prof-form">Personal Details</div>
                <div class="input-field col s6">
                    <input id="first_name" value="<?php echo ($user["fname"]); ?>" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" value="<?php echo ($user["lname"]); ?>" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="mobile" value="<?php echo ($user["mobile"]); ?>" type="text" class="validate" disabled>
                    <label for="mobile">Mobile Number</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" value="<?php echo ($user["email"]); ?>" type="text" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6" style="margin-top: 30px;">
                    <input id="dj" value="<?php echo ($user["date_joined"]); ?>" type="text" class="validate" disabled>
                    <label for="dj">Date Joined</label>
                </div>
                <div class="input-field col s6 m-0">
                    <div class="input-field col s12">
                       
                       
                            <select id="gender">
                                <option value="" disabled>Select</option>
                                <?php
                              
                                $gender_rs = Database::search("SELECT * FROM `gender`");
                                $gender_num = $gender_rs->num_rows;
                                for ($i = 0; $i < $gender_num; $i++) {
                                    $gender_data = $gender_rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($gender_data["id"]); ?>" <?php if($user["gender_id"] == $gender_data["id"]){ ?> selected <?php } ?>><?php echo ($gender_data["name"]); ?></option>

                                <?php
                                }
                                ?>


                            </select>
                       

                        <label>Gender</label>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col s12 prof-form">Login Details</div>
                <div class="input-field col s6">
                    <input id="first_name" value="<?php echo ($user["mobile"]); ?>" type="text" class="validate" disabled>
                    <label for="first_name">Username</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" value="<?php echo ($user["password"]); ?>" type="password" class="validate">
                    <label for="password">Password</label>
                </div>

            </div>
            <div class="row">
                <div class="col s12 prof-form">Billing Details</div>
                <div class="input-field col s6">
                    <input id="line1" type="text" class="validate">
                    <label for="line1">Address Line 1</label>
                </div>
                <div class="input-field col s6">
                    <input id="line2" type="text" class="validate">
                    <label for="line2">Address Line 2</label>
                </div>
                <div class="input-field col s6">
                <select id="gender">
                                <option value="" disabled>Select</option>
                                <?php
                              
                                $city_rs = Database::search("SELECT * FROM `city`");
                                $city_num = $city_rs->num_rows;
                                for ($i = 0; $i < $city_num; $i++) {
                                    $city_data = $city_rs->fetch_assoc();
$address_rs = Database::search("SELECT * FROM `address`");
                                ?>
                                    <option value="<?php echo ($gender_data["id"]); ?>" <?php if($address_data["city_id"] == $city_data["id"]){ ?> selected <?php } ?>><?php echo ($gender_data["name"]); ?></option>

                                <?php
                                }
                                ?>


                            </select>
                       

                        <label>City</label>
                </div>
                <div class="input-field col s6">
                    <input id="postal" type="text" class="validate" disabled>
                    <label for="postal">Postal Code</label>
                </div>

            </div>
            <div class="col s12">
                <a class="waves-effect waves-light btn-small cart-button1" onclick="saveProfile();">SAVE </a>
            </div>
        </div>

    </div>



    <?php include "bottom.php"; ?>



</body>

</html>