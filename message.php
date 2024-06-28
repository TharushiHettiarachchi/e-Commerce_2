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
    <title>WebShop - Message</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="row" style="padding: 8px; padding-top: 0px; padding-bottom: 10px;">

        <div class="col l3 s12 cart-div teal lighten-5">
            <div class="row">
                <div class="input-field col l10 s10 offset-l1 offset-s1">
                    <i class="material-icons prefix">search</i>
                    <textarea id="icon_prefix2" placeholder="Search..."
                        class="materialize-textarea white-text"></textarea>


                </div>

            </div>
            <div class="row">
                <div class="col s12 teal lighten-3 chat-out" style="height: 100px;">
                    <div class="row">

                    </div>
                </div>
                <div class="col s12 teal lighten-4 chat-out" style="height: 100px;">
                    <div class="row">

                    </div>
                </div>
                <div class="col s12 teal lighten-3 chat-out" style="height: 100px;">
                    <div class="row">

                    </div>
                </div>
                <div class="col s12 teal lighten-3 chat-out" style="height: 100px;">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="col l9 s12 teal lighten-4 cart-div" style="padding-top: 0px;">
            <div class="row">
                <div class="col s12 teal lighten-3" style="height: 60px;"></div>
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

    </script>
    <script src="script.js"></script>


</body>

</html>