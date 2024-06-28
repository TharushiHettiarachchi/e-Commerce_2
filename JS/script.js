
// ----------------------------------------------------------------------SignIn & SignUp--------------------------------------------------------------------------------------

function signUp() {
    var signIn = document.getElementById("signUp");
    var signUp = document.getElementById("signIn");

    if (signUp.style.display = "none") {
        signUp.style.display = "block";
        signUp.style.display = "flex";
        signIn.style.display = "none"
    } else {
        signIn.style.display = "block";
        signIn.style.display = "flex";
        signUp.style.display = "none"
    }

}

function signIn() {
    var signIn = document.getElementById("signUp");
    var signUp = document.getElementById("signIn");

    if (signIn.style.display = "none") {
        signIn.style.display = "block";
        signIn.style.display = "flex";
        signUp.style.display = "none"
    } else {
        signUp.style.display = "block";
        signUp.style.display = "flex";
        signIn.style.display = "none"
    }

}

function signUpProcess() {
    var fname = document.getElementById("first_name");
    var lname = document.getElementById("last_name");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("passwords");
    var email = document.getElementById("emails");

    var form = new FormData();
    form.append("fname", fname.value);
    form.append("lname", lname.value);
    form.append("mobile", mobile.value);
    form.append("password", password.value);
    form.append("email", email.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Signed Up") {
                M.toast({ html: response, classes: 'success' })
                signUp();

            } else {
                M.toast({ html: response, classes: 'error' })
            }

        }

    }

    request.open("POST", "signUpProcess.php", true);
    request.send(form);

}

function signInProcess() {

    var mobile = document.getElementById("mobiles");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("mobile", mobile.value);
    form.append("password", password.value);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Signed In") {
                M.toast({ html: response, classes: 'success' })
                window.location = "dashboard.php";

            } else {
                M.toast({ html: response, classes: 'error' })
            }

        }

    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);

}


// ---------------------------------------------------------- Dashboard ---------------------------------------------------

function searchProduct() {

    var searchText = document.getElementById("icon_prefix2").value;
    var searchedDiv = document.getElementById("searchedDiv");

    var form = new FormData();
    form.append("searchText", searchText);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            searchedDiv.innerHTML = response;

        }

    }

    request.open("POST", "basicSearchProcess.php", true);
    request.send(form);

}

function addToCart(id) {

    var product_id = id;
    var cart_button = document.getElementById("cartButton" + id);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "Successfully added") {
                M.toast({ html: response, classes: 'success' })
                cart_button.innerHTML = "<i class='material-icons' style='margin-right: 5px;'>local_grocery_store</i>Added to Cart";
                cart_button.disabled = true;
                setTimeout(function () {
                    window.location.reload();
                }, 2000);

            } else {
                M.toast({ html: response, classes: 'error' })
            }


        }

    }
    request.open("GET", "addToCartProcess.php?id=" + product_id, true);
    request.send();
}

function addToFavourite(id) {

    var product_id = id;
    var fav_button = document.getElementById("favouriteButton" + id);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "Successfully added") {
                M.toast({ html: response, classes: 'success' })
                fav_button.innerHTML = "<i class='material-icons' style='margin-right: 5px;'>favorite</i>Added to Wishlist";
                fav_button.disabled = true;
                setTimeout(function () {
                    window.location.reload();
                }, 2000);

            } else {
                M.toast({ html: response, classes: 'error' })
            }


        }

    }
    request.open("GET", "addToFavouriteProcess.php?id=" + product_id, true);
    request.send();
}


//---------------------------------------------------------------- Cart-------------------------------------

function changeQty(id) {
    var qty = document.getElementById("qty" + id).value;

    var form = new FormData();
    form.append("qty", qty);
    form.append("id", id);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "Out of Stock") {
                M.toast({ html: response, classes: 'error' })
                loadProductTotal(id);
            }
            if (response == "Maximum available qunatity reached") {
                M.toast({ html: response, classes: 'error' })
                loadProductTotal(id);
               
            }else if (response == "Minimum Qunatity Reached") {
                M.toast({ html: response, classes: 'error' })
                loadProductTotal(id);
               
            } else {
               
                loadProductTotal(id);
            }


        }

    }
    request.open("POST", "changeQuantityProcess.php", true);
    request.send(form);
}

function loadProductTotal(id) {
    var productTotal = document.getElementById("productTotal"+id);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            productTotal.innerHTML = "Rs. " + response + ".00";
            getProductTotal();

        }

    }
    request.open("GET", "changeProductPrice.php?id=" + id, true);
    request.send();
}

function getProductTotal(){
    var totalPrice = document.getElementById("totalPrice");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            totalPrice.innerHTML = "Rs. " + response + ".00";


        }

    }
    request.open("GET", "getProductTotal.php", true);
    request.send();
}

function deleteFromCart(){
    
}











function admin1() {
    var signIn = document.getElementById("adminlogin1");
    var signUp = document.getElementById("adminlogin2");


    signUp.style.display = "block";
    signUp.style.display = "flex";
    signIn.style.display = "none"

}














