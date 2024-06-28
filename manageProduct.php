<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nouislider.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="icon" href="Resources/icon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>WebShop - Admin Dashboard</title>
</head>

<body>
    <?php include "adminHeader.php"; ?>

    <div class="row" style="padding: 8px; padding-top: 0px; padding-bottom: 10px;">

        <div class="col l9 s12 cart-div" style="padding-right: 20px;">
            <div class="row">
                <div class="col s12 cart-title">Manage Products</div>
            </div>
            <div class="row">
                <div class="col s12 l3" onclick="window.location='adminProductView.html';">
                    <div class="card" style="padding-bottom: 10px;">
                        <div class="card-image">
                            <img src="Resources/product1.jpg" class="pro-img">
                            <span class="card-title pro-title">Rye Bread</span>
                        </div>
                        <div class="card-content">
                            <p class="price-label" style="padding-bottom: 30px;">Rs. 1000.00</p>

                        </div>

                    </div>
                </div>
                <div class="col s12 l3">
                    <div class="card" style="padding-bottom: 10px;">
                        <div class="card-image">
                            <img src="Resources/product6.jpg" class="pro-img">
                            <span class="card-title pro-title">Cup Cake</span>
                        </div>
                        <div class="card-content">
                            <p class="price-label" style="padding-bottom: 30px;">Rs. 1000.00</p>

                        </div>

                    </div>
                </div>
                <div class="col s12 l3">
                    <div class="card" style="padding-bottom: 10px;">
                        <div class="card-image">
                            <img src="Resources/product3.jpg" class="pro-img">
                            <span class="card-title pro-title">Pita Bread</span>
                        </div>
                        <div class="card-content">
                            <p class="price-label" style="padding-bottom: 30px;">Rs. 1000.00</p>

                        </div>

                    </div>
                </div>
                <div class="col s12 l3">
                    <div class="card" style="padding-bottom: 10px;">
                        <div class="card-image">
                            <img src="Resources/product5.jpg" class="pro-img">
                            <span class="card-title pro-title">Fruit Cake</span>
                        </div>
                        <div class="card-content">
                            <p class="price-label" style="padding-bottom: 30px;">Rs. 1000.00</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 s12 teal lighten-4 cart-div" style="padding: 20px;">
            <div class="row">
                <div class="col s12 summary-title" style="margin-bottom: 20px;">Sort By</div>
            </div>
            <div class="input-field col s12">
                <input id="search" type="text" class="validate">
                <label for="search">Search</label>
            </div>
            <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Select by Category</option>
                  <option value="1">Breads</option>
                  <option value="2">Cakes</option>
                  <option value="3">Short Eats</option>
                </select>
                <label>Materialize Select</label>
              </div>
              <div class="col s12">
                <a class="waves-effect waves-light btn-small cart-button1" style="margin-bottom: 20px;">Search</a>
            </div>
            <div class="col s12">
                <hr style="border-color: #009688 ;" />
            </div>
            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1" onclick="window.location = 'addProduct.html';">Add Product</a>
                </div>
                <!-- <div class="col s12">
                    <a class="waves-effect waves-light btn-small cart-button1">Remove All</a>
                </div> -->
            </div>
        </div>

    </div>








    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });

        document.addEventListener('DOMContentLoaded', function () {
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

        document.addEventListener('DOMContentLoaded', function () {
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