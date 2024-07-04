<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "top.php"; ?>
    <title>WebShop - Favourite</title>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="row" style="padding: 8px; padding-top: 0px; padding-bottom: 10px;">

        <div class="col l9 s12 cart-div" style="padding-right: 20px;">

            <div class="row">
                <div class="col s12 cart-title">Favourite</div>

            </div>
            <?php
            $favourite_rs = Database::search("SELECT * FROM `favourite` WHERE `customer_mobile` = '" . $user["mobile"] . "'");
            $favourite_num = $favourite_rs->num_rows;

            if($favourite_num == 0){
?>
 <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col s12 emptyCart teal lighten-5 teal-text">Favourite is Empty</div>
                </div>
<?php
            }else{
                ?>
 <div class="row">
                <?php
                for ($i = 0; $i < $favourite_num; $i++) {
                    $favourite_data = $favourite_rs->fetch_assoc();
                    $product_rs = Database::search("SELECT * FROM `product` WHERE `id` ='" . $favourite_data["product_id"] . "'");
                    $product_data = $product_rs->fetch_assoc();
                ?>
                    <div class="col s12 l3">
                        <div class="card" style="padding-bottom: 10px;">
                            <div class="card-image">
                                <img src="<?php echo ($product_data["pic"]); ?>" class="pro-img">
                                <span class="card-title pro-title"><?php echo ($product_data["product_name"]); ?></span>
                            </div>
                            <div class="card-content">
                                <p class="price-label" style="padding-bottom: 30px;">Rs. <?php echo ($product_data["price"]); ?>.00</p>
                                <div class="col s12">
                                    <div class="row">
                                        <button class="col s2 offset-s3" style="border: none; background-color: transparent;" onclick="deleteFromFavourite(<?php echo ($product_data['id']); ?>);"><i class="material-icons light-green-text">favorite</i></button>
                                        <?php
                                        $cart_rs = Database::search("SELECT * FROM `cart` WHERE `customer_mobile` = '" . $user["mobile"] . "' AND `product_id` = '" . $product_data["id"] . "'");
                                        $cart_num = $cart_rs->num_rows;
                                        if ($cart_num == 0) {
                                        ?>
                                            <button class="col s2 " id="cart_button<?php echo ($product_data['id']); ?>" style="border: none; background-color: transparent;" onclick="addToCartFromFavourite('<?php echo ($product_data['id']); ?>');"><i class="material-icons teal-text"  >local_grocery_store</i></button>

                                        <?php
                                        } else {
                                        ?>
                                            <button class="col s2" style="border: none; background-color: transparent;" id="cart_button<?php echo ($product_data['id']); ?>" onclick="deleteFromCart(<?php echo ($product_data['id']); ?>);"><i class="material-icons light-green-text">local_grocery_store</i></button>

                                        <?php
                                        }
                                        ?>
                                        <button class="col s2" style="border: none; background-color: transparent;"><i class="material-icons teal-text">payment</i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>



            </div>
                <?php
            }

            ?>
           
        </div>
        <div class="col l3 s12 teal lighten-4 cart-div" style="padding: 20px;">
            <div class="row">
                <div class="col s12 summary-title" style="margin-bottom: 20px;">Quick Access</div>
                <div class="col s12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col s6 summary-name">No. of Items</div>
                        <div class="col s6 summary-price"><?php echo ($favourite_num); ?></div>
                    </div>
                </div>

            </div>
            <hr style="border-color: #009688 ;" />

            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1">Buy All</a>
                </div>
                <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1" onclick="FavouriteRemoveAll();">Remove All</a>
                </div>
                <!-- <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1" onclick="window.location = 'cart.php';">Cart</a>
                </div> -->
                <!-- <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1">Recents</a>
                </div> -->
            </div>
        </div>

    </div>










    <?php include "bottom.php"; ?>
</body>

</html>