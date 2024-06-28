<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "top.php"; ?>
    <title>WebShop - Dashboard</title>
</head>

<body>
    <?php include "header.php"; ?>

    <!-- Carousel -->

    <div class="row" style="display: flex; align-items: center; justify-content: center;">
        <div class="slider-background">
            <div class="carousel carousel-slider slider-background">
                <a class="carousel-item" href="#one!"><img src="Resources/page-1.jpeg"></a>
                <a class="carousel-item" href="#two!"><img src="Resources/page-2.jpeg"></a>
                <a class="carousel-item" href="#three!"><img src="Resources/page-3.jpeg"></a>
                <a class="carousel-item" href="#four!"><img src="Resources/page-4.jpeg"></a>
                <a class="carousel-item" href="#five!"><img src="Resources/page-5.jpeg"></a>
                <a class="carousel-item" href="#six!"><img src="Resources/page-6.jpeg"></a>

            </div>
        </div>
    </div>

    <!-- Carousel -->

    <!-- Search -->

    <div class="row teal lighten-5" style="margin-top: 50px; padding-top: 50px; padding-bottom: 50px;">
        <div class="row">
            <div class="col s12 search-head">Search Bakery Products</div>
            <form class="col s12 m-0">
                <div class="row">
                    <div class="input-field col l4 s10 offset-l4 offset-s1">
                        <i class="material-icons prefix">search</i>
                        <textarea id="icon_prefix2" placeholder="Search..." class="materialize-textarea" onkeyup="searchProduct();"></textarea>
                    </div>
                </div>
            </form>
            <div class="col s12 teal-text text-lighten-1 center-align advanced-s" onclick="window.location = 'advancedSearch.php';">Advanced Search</div>
        </div>
    </div>

    <div class="row" id="searchedDiv"></div>

    <!-- Search -->


    <?php
    $category_rs = Database::search("SELECT * FROM `category`");
    $category_num = $category_rs->num_rows;
    for ($i = 0; $i < $category_num; $i++) {
        $category_data = $category_rs->fetch_assoc();
    ?>

        <!-- Product Category Block -->

        <div class="row">
            <div class="col s12 category-title"><?php echo ($category_data["name"]); ?></div>
            <div class="col s12" style="padding-bottom: 20px;">
                <hr />
            </div>
            <?php
            $product_rs = Database::search("SELECT * FROM `product` WHERE `category_id` = '" . $category_data["id"] . "'");
            $product_num = $product_rs->num_rows;
            for ($p = 0; $p < $product_num; $p++) {
                $product_data = $product_rs->fetch_assoc();
            ?>

                <!-- Product Item -->

                <div class="col s12 m4 l2">
                    <div class="card modal-trigger">
                        <div class="card-image modal-trigger" href="#modal<?php echo ($product_data["id"]); ?>">
                            <img src="<?php echo ($product_data["pic"]); ?>" class="pro-img">
                            <span class="card-title pro-title"><?php echo ($product_data["product_name"]); ?></span>
                        </div>
                        <div class="price-label">Rs. <?php echo ($product_data["price"]); ?></div>
                        <div class="card-content pro-button-panel">
                            <?php
                            $cart_rs = Database::search("SELECT * FROM `cart` WHERE `customer_mobile` = '" . $user["mobile"] . "' AND `product_id` = '" . $product_data["id"] . "'");
                            $cart_num = $cart_rs->num_rows;
                            if ($cart_num == 0) {
                            ?>
                                <div class="col s12" style="margin-top: 5px;" onclick="addToCart('<?php echo ($product_data['id']); ?>');">
                                    <button class="waves-effect waves-light btn pro-button teal lighten-1" id="cartButton<?php echo ($product_data["id"]); ?>"><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Add to Cart</button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col s12" style="margin-top: 5px;">
                                    <button class="waves-effect waves-light btn pro-button light-green lighten-1" id="cartButton<?php echo ($product_data["id"]); ?>" disabled><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Added to Cart</button>
                                </div>
                            <?php

                            }
                            ?>
                            <?php
                            $favourite_rs = Database::search("SELECT * FROM `favourite` WHERE `customer_mobile` = '" . $user["mobile"] . "' AND `product_id` = '" . $product_data["id"] . "'");
                            $favourite_num = $favourite_rs->num_rows;
                            if ($favourite_num == 0) {
                            ?>
                                <div class="col s12" style="margin-top: 5px;" onclick="addToFavourite('<?php echo ($product_data['id']); ?>');">
                                    <button class="waves-effect waves-light btn pro-button teal darken-1" id="favouriteButton<?php echo ($product_data["id"]); ?>"><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Add to WishList</button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col s12" style="margin-top: 5px;">
                                    <button class="waves-effect waves-light btn pro-button light-green darken-1" id="favouriteButton<?php echo ($product_data["id"]); ?>" disabled><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Added to WishList</button>
                                </div>
                            <?php

                            }

                            ?>
                            <?php
                            if ($product_data["quantity"] < 1) {
                            ?>
                                <div class="col s12 modal-trigger" style="margin-top: 5px;" href="#modal<?php echo ($product_data["id"]); ?>">
                                    <button class="waves-effect waves-light btn pro-button teal darken-3" disabled><i class="material-icons" style="margin-right: 5px;">&nbsp;payment</i>Buy Now</button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col s12 modal-trigger" style="margin-top: 5px;" href="#modal<?php echo ($product_data["id"]); ?>">
                                    <button class="waves-effect waves-light btn pro-button teal darken-3"><i class="material-icons" style="margin-right: 5px;">&nbsp;payment</i>Buy Now</button>
                                </div>
                            <?php
                            }
                            ?>


                        </div>

                    </div>
                </div>

                <!-- Product Item -->

                <!-- Modal -->

                <div id="modal<?php echo ($product_data["id"]); ?>" class="modal pro-mod">
                    <div class="modal-content pro-mod1">
                        <h4 class="product-info-title"><?php echo ($product_data["product_name"]); ?></h4>
                        <div class="row">
                            <div class="col l6 s12 product-info-img" style="background-image: url('<?php echo ($product_data["pic"]); ?>');"></div>
                            <div class="col l6 s12 product-info-detail" style="display: flex; justify-content: center; flex-direction: column;">
                                <div class="row">
                                    <div class="col s4 product-info">Product Name :</div>
                                    <div class="col s8 product-info"><?php echo ($product_data["product_name"]); ?></div>
                                </div>
                                <div class="row">
                                    <div class="col s4 product-info">Product Description :</div>
                                    <div class="col s8 product-info"><?php echo ($product_data["description"]); ?></div>
                                </div>
                                <div class="row" style="display: flex; align-items: baseline;">
                                    <div class="col s4 product-info valign-wrapper">Quantity :</div>
                                    <div class="col s8 product-info"><input type="number" value="1" /></div>
                                </div>
                                <div class="row">
                                    <div class="col s4 product-info">Product Price :</div>
                                    <div class="col s8 product-info1">Rs. <?php echo ($product_data["price"]); ?>.00</div>
                                </div>
                                <div class="row" style="display: flex; align-items: center; flex-direction: column;">
                                    <a class="waves-effect waves-light btn pro-info-btn teal lighten-1">Add to cart</a>
                                    <a class="waves-effect waves-light btn pro-info-btn teal darken-1">Add to Wishlist</a>
                                    <a class="waves-effect waves-light btn pro-info-btn teal darken-3">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer pro-foot">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

            <?php
            }
            ?>
        </div>

        <!-- Product Category Block -->

    <?php
    }
    ?>



    <?php include "bottom.php"; ?>
</body>

</html>