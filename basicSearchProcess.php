<?php
include "connection.php";
$searchText = $_POST["searchText"];

if(empty($searchText)){

}else{
    $product_rs = Database::search("SELECT * FROM `product` WHERE `product_name` LIKE '%" . $searchText . "%' ");
    $product_num = $product_rs->num_rows;
    ?>
    <div class="col s12 category-title">
        <?php echo($product_num) . " " . "Items Found"; ?>
    
    </div>
    <div class="col s12" style="padding-bottom: 20px;">
        <hr />
    </div>
    <?php
    for ($i = 0; $i < $product_num; $i++) {
        $product_data = $product_rs->fetch_assoc();
    ?>
        <div class="col s12 m4 l2">
            <div class="card modal-trigger" href="#modal<?php echo ($product_data["id"]); ?>">
                <div class="card-image">
                    <img src="<?php echo ($product_data["pic"]); ?>" class="pro-img">
                    <span class="card-title pro-title"><?php echo ($product_data["product_name"]); ?></span>
                </div>
                <div class="price-label">Rs. <?php echo ($product_data["price"]); ?></div>
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
    <?php
    }
    
    
    
}
?>
