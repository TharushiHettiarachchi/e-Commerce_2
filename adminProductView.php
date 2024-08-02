<?php

if (isset($_GET["id"])) {
    $product_id = $_GET["id"];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include "top.php"; ?>
        <title>WebShop - Admin Dashboard</title>
    </head>

    <body>
        <?php include "adminHeader.php"; ?>
<?php
$product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '".$product_id."'");
$product_data = $product_rs->fetch_assoc();

?>
        <div class="row admin-pro-div1">
            <div class="col l4 s12">
                <div class="row admin-pro-div">
                    <div class="col s12 pro-ad teal lighten-5">
                        <div class="row">
                            <div class="col s12 cart-title"><?php echo($product_data["product_name"]); ?></div>
                            <div class="col s12 ad-pro-img" style="background-image:url(<?php echo($product_data["pic"]); ?>);"></div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s4 ad-pro-h1">Product ID :</div>
                                    <div class="col s8 ad-pro-h2"><?php echo($product_data["id"]); ?></div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s4 ad-pro-h1">Product Name :</div>
                                    <div class="col s8 ad-pro-h2"><?php echo($product_data["product_name"]); ?></div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s4 ad-pro-h1">Product Description :</div>
                                    <div class="col s8 ad-pro-h2"><?php echo($product_data["description"]); ?></div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s4 ad-pro-h1">Product Price :</div>
                                    <div class="col s8 ad-pro-h2">Rs. <?php echo($product_data["price"]); ?>.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="row admin-pro-div">
                    <div class="col s12 pro-ad teal lighten-5">
                        <div class="row">
                            <div class="col s12 ad-pro-analytic">Product Analytics</div>
                            <div class="col s12" style="margin-top: 20px;">
                                <canvas id="myChart" style="width:100%; height: 400px;"></canvas>
                                <script>
                                    const xyValues = [{
                                            x: 1,
                                            y: 7
                                        },
                                        {
                                            x: 2,
                                            y: 8
                                        },
                                        {
                                            x: 3,
                                            y: 8
                                        },
                                        {
                                            x: 4,
                                            y: 9
                                        },
                                        {
                                            x: 5,
                                            y: 9
                                        },
                                        {
                                            x: 6,
                                            y: 9
                                        },
                                        {
                                            x: 7,
                                            y: 10
                                        },
                                        {
                                            x: 8,
                                            y: 11
                                        },
                                        {
                                            x: 9,
                                            y: 14
                                        },
                                        {
                                            x: 10,
                                            y: 14
                                        },
                                        {
                                            x: 11,
                                            y: 14
                                        },
                                        {
                                            x: 12,
                                            y: 15
                                        }
                                    ];

                                    new Chart("myChart", {
                                        type: "scatter",
                                        data: {
                                            datasets: [{
                                                pointRadius: 4,
                                                pointBackgroundColor: "#009688",
                                                data: xyValues
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            },
                                            scales: {
                                                xAxes: [{
                                                    ticks: {
                                                        min: 0,
                                                        max: 12
                                                    }
                                                }],
                                                yAxes: [{
                                                    ticks: {
                                                        min: 6,
                                                        max: 16
                                                    }
                                                }],
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col l4 s6 ad-pro-h1">Total Items Sold :</div>
                                    <div class="col l8 s6 ad-pro-h2">10</div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="row">
                                    <div class="col l4 s6 ad-pro-h1">Today's sellings :</div>
                                    <div class="col l4 s6 ad-pro-h2">08</div>
                                </div>
                            </div>
                            <div class="col s12 ad-pro-analytic">Overall Ratings</div>
                            <div class="col s12">
                                <div class="row show-on-large hide-on-med-and-down" style="margin-top: 20px; padding-left: 20px;">
                                    <i class="large material-icons yellow-text text-darken-1">star</i>
                                    <i class="large material-icons yellow-text text-darken-1">star</i>
                                    <i class="large material-icons yellow-text text-darken-1">star</i>
                                    <i class="large material-icons teal-text text-lighten-4">star</i>
                                    <i class="large material-icons teal-text text-lighten-4">star</i>
                                </div>
                                <div class="row show-on-medium-and-down hide-on-large-only" style="margin-top: 20px; padding-left: 20px;">
                                    <i class="medium material-icons yellow-text text-darken-1">star</i>
                                    <i class="medium material-icons yellow-text text-darken-1">star</i>
                                    <i class="medium material-icons yellow-text text-darken-1">star</i>
                                    <i class="medium material-icons teal-text text-lighten-4">star</i>
                                    <i class="medium material-icons teal-text text-lighten-4">star</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="row admin-pro-div">
                    <div class="col s12 pro-ad teal lighten-5">
                        <div class="row" style="height: 70vh;">
                            <div class="col s12 ad-pro-analytic" style="margin-bottom: 20px;">Product Feedbacks</div>
                            <div class="col s12" style="padding: 20px; padding-top: 5px; padding-bottom: 5px;">
                                <div class="row teal lighten-4 feedback-ad">
                                    <div class="col s8 feedback-name">Tharushi Hettiarachchi</div>
                                    <div class="col s4">
                                        <div class="row" style="display: flex; align-items: center; justify-content: end;">
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons teal-text text-lighten-5">star</i>
                                            <i class="small material-icons teal-text text-lighten-5">star</i>
                                        </div>
                                    </div>
                                    <div class="col s12 feedback-msg">Loved your rye bread! Perfect texture and rich flavor. I'll buy it again for sure!</div>
                                </div>
                            </div>
                            <div class="col s12" style="padding: 20px; padding-top:5px;padding-bottom: 5px;">
                                <div class="row teal lighten-4 feedback-ad">
                                    <div class="col s8 feedback-name">Tharushi Hettiarachchi</div>
                                    <div class="col s4">
                                        <div class="row" style="display: flex; align-items: center; justify-content: end;">
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons yellow-text text-darken-1">star</i>
                                            <i class="small material-icons teal-text text-lighten-5">star</i>
                                            <i class="small material-icons teal-text text-lighten-5">star</i>
                                        </div>
                                    </div>
                                    <div class="col s12 feedback-msg">Loved your rye bread! Perfect texture and rich flavor. I'll buy it again for sure!</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <a class="waves-effect waves-light btn-small cart-button1" onclick="window.location = 'updateProduct.html';">Update Product </a>
                                <a class="waves-effect waves-light btn-small cart-button1">Delete Product </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>






        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems, {});
            });

            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.carousel');
                var options = {
                    duration: 200, // Set the desired duration in milliseconds
                    fullWidth: true, // Make the carousel full width
                    indicators: true, // Show indicators
                    autoplay: true // Custom option for autoplay
                };
                var instances = M.Carousel.init(elems, options);

                // Set interval for auto-changing slides
                setInterval(() => {
                    instances.forEach(instance => instance.next());
                }, 5000); // Change slide every 5000 milliseconds (5 seconds)
            });

            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems, {});
            });
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems, {});
            });
        </script>
        <script src="script.js"></script>
    </body>

    </html>
<?php
}







?>