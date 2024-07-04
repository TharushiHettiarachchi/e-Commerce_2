<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "top.php"; ?>
    <title>WebShop - Cart</title>
</head>

<body class="cart-body" onload="getProductTotal();">
    <?php include "header.php"; ?>
    <div class="row" style="padding: 8px; padding-top: 0px; padding-bottom: 10px;">

        <div class="col l9 s12 cart-div" style="padding-right: 20px;">
            <div class="row">
                <div class="col s12 cart-title">Cart</div>
            </div>
            <?php
            $cart_rs = Database::search("SELECT * FROM `cart` WHERE `customer_mobile` = '" . $user["mobile"] . "'");
            $cart_num = $cart_rs->num_rows;
            if ($cart_num == 0) {
            ?>
                <div class="row" style="display: flex; align-items: center; justify-content: center;">
                    <div class="col s12 emptyCart teal lighten-5 teal-text">Cart is Empty</div>
                </div>
            <?php
            } else {
            ?>
                <div class="row">
                    <?php
                    for ($i = 0; $i < $cart_num; $i++) {
                        $cart_data = $cart_rs->fetch_assoc();

                        $product_rs = Database::search("SELECT * FROM `product`  WHERE `id` = '" . $cart_data["product_id"] . "'");
                        $product_data = $product_rs->fetch_assoc();
                    ?>
                        <div class="cart-pro">
                            <div class="row">
                                <div class="col l1 s4 cart-pro-img">
                                    <div class="pro-img-cart" style="background-image: url('<?php echo ($product_data["pic"]); ?>');"> </div>
                                </div>
                                <div class="col l3 s8 cart-pro-name"> <?php echo ($product_data["product_name"]); ?></div>
                                <div class="col l2 s4 cart-pro-qty">
                                    <div class="row" style="display: flex; align-items: baseline; justify-content: center;">
                                        <span>Qty :</span>
                                        <input type="number" id="qty<?php echo ($product_data["id"]); ?>" style="width: 100px;" value="<?php echo ($cart_data["quantity"]); ?>" min="1" onchange="changeQty(<?php echo ($product_data['id']); ?>);" />
                                    </div>
                                </div>
                                <div class="col l3 s4 cart-pro-price">Rs. <?php echo (" " . $product_data["price"]); ?>.00</div>
                                <div class="col l1 s4 offset-l2 cart-pro-edit">
                                    <div class="row">
                                        <div class="fixed-action-btn">
                                            <a class="btn-floating btn-large teal">
                                                <i class="large material-icons">mode_edit</i>
                                            </a>
                                            <ul>
                                                <li><a class="btn-floating teal lighten-3"><i class="material-icons" onclick="deleteFromCart(<?php echo ($product_data['id']); ?>);">delete</i></a>
                                                </li>
                                                <?php
                                                $favourite_rs =  Database::search("SELECT * FROM `favourite` WHERE `customer_mobile` = '" . $user["mobile"] . "' AND `product_id` = '".$cart_data["product_id"]."'");
                                                $favourite_num = $favourite_rs->num_rows;
                                                if ($favourite_num == 0) {
                                                ?>
                                                    <li><a class="btn-floating teal lighten-1" id="favouriteButton<?php echo ($product_data['id']); ?>"><i class="material-icons" onclick="addToFavouriteFromCart('<?php echo ($product_data['id']); ?>');">favorite</i></a></li>
                                                <?php
                                                } else {
                                                ?>
                                                    <li><a class="btn-floating light-green lighten-1"  id="favouriteButton<?php echo ($product_data['id']); ?>"><i class="material-icons" onclick="deleteFromFavourite(<?php echo ($product_data['id']); ?>);">favorite</i></a></li>
                                                <?php
                                                }
                                                ?>

                                                <li><a class="btn-floating teal darken-3"><i class="material-icons">payment</i></a>
                                                </li>
                                            </ul>
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
                <div class="col s12 summary-title" style="margin-bottom: 20px;">Summary</div>
                <?php
                $cart_rs1 = Database::search("SELECT * FROM `cart` WHERE `customer_mobile` = '" . $user["mobile"] . "'");
                $cart_num1 = $cart_rs1->num_rows;

                for ($c = 0; $c < $cart_num1; $c++) {
                    $cart_data1 = $cart_rs1->fetch_assoc();
                    $product_rs1 = Database::search("SELECT * FROM `product`  WHERE `id` = '" . $cart_data1["product_id"] . "'");
                    $product_data1 = $product_rs1->fetch_assoc();
                ?>
                    <div class="col s12" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col s6 summary-name"><?php echo ($product_data1["product_name"]); ?></div>

                            <div class="col s6 summary-price" id="productTotal<?php echo ($product_data1["id"]); ?>">Rs.<?php echo ($product_data1["price"] * $cart_data1["quantity"]); ?> .00</div>
                        </div>
                    </div>
                <?php
                }

                ?>


            </div>
            <hr style="border-color: #009688 ;" />
            <div class="row">
                <div class="col s12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col s6 summary-name">Total</div>
                        <div class="col s6 summary-price" id="totalPrice">Rs..00</div>
                    </div>
                </div>
            </div>
            <hr style="border-color: #009688 ;" />
            <hr style="border-color: #009688 ;" />
            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1">Buy All</a>
                </div>
                <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1" onclick="cartRemoveAll();">Remove All</a>
                </div>
            </div>
        </div>

    </div>

    <?php include "bottom.php"; ?>
</body>

</html>