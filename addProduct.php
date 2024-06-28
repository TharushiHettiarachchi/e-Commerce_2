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

    <div class="row">
        <div class="col l6 s12 offset-l3 teal lighten-5 addpro">
            <div class="row">
                <div class="col s12 cart-title center-align" style="margin-top: 20px; margin-bottom: 10px;">Add Product
                </div>
                <div class="col l8 s10 offset-l2 offset-s1 teal lighten-5 load-img" style="background-image: url(Resources/default-image.jpg);"></div>
                <div class="col s12 " style="padding-top: 20px; padding-bottom: 30px;">
                    <input type="file" id="file-uploader" style="display: none;" />
                    <label for="file-uploader" class="waves-effect waves-light btn-small col l8 s10 offset-l2 offset-s1">Add
                        Product Image</label>
                </div>
                <div class="input-field col l8 s10 offset-l2 offset-s1">
                    <input id="pro-name" type="text" class="validate">
                    <label for="pro-name">Product Name</label>
                </div>
                <div class="input-field col l8 s10 offset-l2 offset-s1">
                    <select>
                      <option value="" disabled selected>Select</option>
                      <option value="1">Breads</option>
                      <option value="2">Cakes</option>
                      <option value="3">Short Eats</option>
                    </select>
                    <label>Product Category</label>
                  </div>
                
                <div class="input-field col l8 s10 offset-l2 offset-s1">
                    <input id="pro-name" type="text" class="validate">
                    <label for="pro-name">Product Price</label>
                </div>
                <div class="row">
                    <form class="col l8 s10 offset-l2 offset-s1">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Product Description</label>
                        </div>
                      </div>
                    </form>
                  </div>
                <div class="col s12">
                    <label class="waves-effect waves-light btn-small col l8 s10 offset-l2 offset-s1">Add
                        Product</label>
                </div>
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
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, {});
        });


    </script>
    <script src="script.js"></script>
</body>

</html>