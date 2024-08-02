<!DOCTYPE html>
<html lang="en">

<head>
<?php include "top.php"; ?>
    <title>WebShop - Admin Dashboard</title>
</head>

<body>
    <?php include "adminHeader.php"; ?>

    <div class="row" style="padding: 10px;">
        <div class="col l6 s12 box5">
            <div class="row" style="padding: 0; margin: 0;">

                <div class="col l6 s12 teal darken-3 admin-dash-box box1">
                    <div class="sell-head"> Today's Sellings</div>
                    <div class="sell-sub"> Rs. 1000.00</div>
                </div>


                <div class="col l6 s12 teal darken-1 admin-dash-box box2">
                    <div class="sell-head"> Monthly Sellings</div>
                    <div class="sell-sub"> Rs. 1000.00</div>
                </div>

            </div>
            <div class="row" style="padding: 0; margin: 0;">

                <div class="col l6 s12 teal lighten-1 admin-dash-box box3">
                    <div class="sell-head"> Total Sellings</div>
                    <div class="sell-sub"> Rs. 1000.00</div>
                </div>


                <div class="col l6 s12 teal lighten-3 admin-dash-box box4">
                    <div class="sell-head"> Customers</div>
                    <div class="sell-sub"> 40+</div>
                </div>

            </div>

        </div>
        <div class="col l3 s12">
            <div class="row" style="padding-right: 10px; padding-left: 20px; padding-top: 0; padding-bottom: 0;">
                <div class="col s12 teal lighten-4 admin-dash-most">
                    <div class="row">
                        <div class="col s12 center-align sell-sub" style="padding-top: 30px;">Most Popular Product
                        </div>
                        <div class="col s12" style="display: flex; align-items: center; justify-content: center;">
                            <div class="row">
                                <div class="admin-dash-pro" style="background-image:url(Resources/product1.jpg);"></div>
                            </div>
                        </div>
                        <div class="col s12 center-align sell-pro teal-text text-darken-3">Rye Bread</div>
                        <div class="col s12 center-align sell-small">BREAD</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 s12">
            <div class="row" style="padding: 10px; padding-top: 0; padding-bottom: 0;">
                <div class="col s12 teal lighten-2 admin-dash-most">
                    <div class="row">
                        <div class="col s12 center-align sell-sub" style="padding-top: 30px;">Frequent Customer
                        </div>
                        <div class="col s12" style="display: flex; align-items: center; justify-content: center;">
                            <div class="row">
                                <div class="admin-dash-pro" style="background-image:url(Resources/prof1.jpg);"></div>
                            </div>
                        </div>
                        <div class="col s12 center-align sell-pro teal-text text-darken-3">Tharushi Hettiarachchi</div>
                        <div class="col s12 center-align sell-small">tharushihettiarachchi12@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <div class="row">
        <div class="col l6 s12">
            <div class="row" style="padding: 10px; padding-left: 20px;">
                <div class="col s12 teal lighten-5 alert-admin">10 Orders in Progress</div>
            </div>
            <div class="row" style="padding: 10px; padding-left: 20px; padding-top: 5px;">
                <div class="col s12 teal lighten-5 alert-admin">You have 3 unread messages</div>
            </div>
        </div>
        <div class="col l6 s12">
            <a class="waves-effect waves-light btn-small cart-button1 card modal-trigger" href="#modal1">2024 Income
                analysis </a>
        </div>
    </div>

    <!-- <div class="col s8">
        <button class="card modal-trigger" href="#modal1"> hii</button>
    </div> -->
    <!-- Modal Trigger -->
    <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

    <!-- Modal Structure -->
    <div id="modal1" class="modal" style="height: 90vh;">
        <div class="modal-content">
            <h4 class="product-info-title">Income Analysis - 2024</h4>
            <div class="col s12">
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
        </div>
        <div class="modal-footer pro-foot">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">CLOSE</a>
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
    </script>
    <script src="script.js"></script>
</body>

</html>