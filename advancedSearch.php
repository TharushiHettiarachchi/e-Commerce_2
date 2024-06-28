<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "top.php"; ?>
    <title>WebShop - Advanced Search</title>

</head>

<body>
    <?php include "header.php"; ?>
    <div class="row">
        <div class="col s12 cart-title">Advanced Search</div>
    </div>
    <div class="row">
        <div class="col s12 teal lighten-5">
            <div class="row">
                <div class="input-field col l6 s10 offset-l3 offset-s1">
                    <i class="material-icons prefix">search</i>
                    <textarea id="icon_prefix2" placeholder="Search..." class="materialize-textarea"></textarea>
                    <!-- <label for="icon_prefix2">Search</label> -->
                </div>
            </div>
            <?php
            $category_rs = Database::search("SELECT * FROM `category`");
            $category_num = $category_rs->num_rows;
            ?>

            
            <div class="row">
                <div class="input-field col l3 s10 offset-l1 offset-s1">
                    <select>
                        <option value="" disabled selected>Select</option>
                        <?php
                        for ($i = 0; $i < $category_num; $i++) {
                            $category_data = $category_rs->fetch_assoc();
                        ?>
                            <option value="<?php echo ($category_data["id"]); ?>"><?php echo ($category_data["name"]); ?></option>
                        <?php
                        }
                        ?>


                    </select>
                    <label>Select Category</label>
                </div>
                <div class="col l4 s12">
                    <div class="row">
                        <div class="input-field col l4 s10 offset-s1 offset-l1">
                            <input id="from_price" type="text" class="validate">
                            <label for="from_price">Price From</label>
                        </div>
                        <div class="col l2 s10 offset-s1 center-align advance-to">To</div>
                        <div class="input-field col l4 s10 offset-s1">
                            <input id="to_price" type="text" class="validate">
                            <label for="to_price">Price To</label>
                        </div>
                    </div>
                </div>
                <div class="input-field col l3 s10 offset-s1">
                    <select>
                        <option value="" disabled selected>Select</option>
                        <option value="1">Price High to Low</option>
                        <option value="2">Price Low to High</option>
                        <option value="3">Quantity High to Low</option>
                        <option value="4">Quantity Low to High</option>
                    </select>
                    <label>Sort By</label>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col s10 offset-s1">
                    <a class="waves-effect waves-light btn-small cart-button1 teal lighten-2">Search </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 advan-result teal-text">05 Results Found</div>
    </div>

    <div class="row">

        <div class="col s12" style="padding-bottom: 20px;">
            <hr />
        </div>
        <div class="col s12 m4 l3">
            <div class="card modal-trigger" href="#modal1">
                <div class="card-image">
                    <img src="Resources/product1.jpg" class="pro-img">
                    <span class="card-title pro-title">Rye Bread</span>
                </div>
                <div class="price-label">Rs. 1000.00</div>
                <div class="card-content pro-button-panel">
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal lighten-1"><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Add to Cart</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-1"><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Add to WishList</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-3"><i class="material-icons" style="margin-right: 5px;">&nbsp;payment</i>Buy Now</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-image">
                    <img src="Resources/product2.jpg" class="pro-img">
                    <span class="card-title pro-title">Whole Wheat Bread</span>
                </div>
                <div class="price-label">Rs. 1000.00</div>
                <div class="card-content pro-button-panel">
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal lighten-1"><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Add to Cart</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-1"><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Add to WishList</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-3"><i class="material-icons" style="margin-right: 5px;">&nbsp;local_grocery_store</i>Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-image">
                    <img src="Resources/product3.jpg" class="pro-img">
                    <span class="card-title pro-title">Pita Bread</span>
                </div>
                <div class="price-label">Rs. 1000.00</div>
                <div class="card-content pro-button-panel">
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal lighten-1"><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Add to Cart</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-1"><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Add to WishList</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-3"><i class="material-icons" style="margin-right: 5px;">&nbsp;local_grocery_store</i>Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-image">
                    <img src="Resources/product4.jpg" class="pro-img">
                    <span class="card-title pro-title">White Bread</span>
                </div>
                <div class="price-label">Rs. 1000.00</div>
                <div class="card-content pro-button-panel">
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal lighten-1"><i class="material-icons" style="margin-right: 5px;">local_grocery_store</i>Add to Cart</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-1"><i class="material-icons" style="margin-right: 5px;">&nbsp;favorite</i>Add to WishList</a>
                    </div>
                    <div class="col s12" style="margin-top: 5px;">
                        <a class="waves-effect waves-light btn pro-button teal darken-3"><i class="material-icons" style="margin-right: 5px;">&nbsp;local_grocery_store</i>Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Trigger -->
    <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

    <!-- Modal Structure -->
    <div id="modal1" class="modal pro-mod">
        <div class="modal-content pro-mod1">
            <h4 class="product-info-title">Rye Bread</h4>
            <div class="row">
                <div class="col l6 s12 product-info-img" style="background-image: url('Resources/product1.jpg');"></div>
                <div class="col l6 s12 product-info-detail">
                    <div class="row">
                        <div class="col s4 product-info">Product Name :</div>
                        <div class="col s8 product-info">Rye Bread</div>
                    </div>
                    <div class="row">
                        <div class="col s4 product-info">Product Description :</div>
                        <div class="col s8 product-info">Rye bread is a dense, flavorful bread made from rye flour. It
                            has a dark color, robust taste, and chewy texture. Often featuring a tangy flavor from a
                            sourdough starter, it may include caraway seeds for extra flavor. Popular in European
                            cuisines, it's rich in fiber and perfect for hearty sandwiches.</div>
                    </div>
                    <div class="row" style="display: flex; align-items: baseline;">
                        <div class="col s4 product-info valign-wrapper">Quantity :</div>
                        <div class="col s8 product-info"><input type="number" value="1" /></div>
                    </div>
                    <div class="row">
                        <div class="col s4 product-info">Product Price :</div>
                        <div class="col s8 product-info1">Rs. 1000.00</div>
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



  
     <?php include "bottom.php"; ?>
</body>

</html>