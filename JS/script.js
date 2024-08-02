
// ----------------------------------------------------------------------SignIn & SignUp------------------------------------------------------------------------------------------------

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


// -------------------------------------------------------------------------- Dashboard -------------------------------------------------------------------------------------------------

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
                // cart_button.classList = "light-green-text"
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


//-------------------------------------------------------------------------------Cart----------------------------------------------------------------------------------------------------

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

            } else if (response == "Minimum Qunatity Reached") {
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
    var productTotal = document.getElementById("productTotal" + id);

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

function getProductTotal() {
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

function deleteFromCart(id) {
    var product_id = id;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Removed") {
                M.toast({ html: response, classes: 'success' })
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            } else {
                M.toast({ html: 'Something went wrong', classes: 'error' })
            }


        }

    }
    request.open("GET", "deleteCartProductProcess.php?id=" + product_id, true);
    request.send();
}

function cartRemoveAll() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Removed") {
                M.toast({ html: response, classes: 'success' })
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            } else {
                M.toast({ html: 'Something went wrong', classes: 'error' })
            }


        }

    }
    request.open("GET", "deleteAllFromCart.php", true);
    request.send();
}

function addToFavouriteFromCart(id) {

    var product_id = id;
    var fav_button = document.getElementById("favouriteButton" + id);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "Successfully added") {
                M.toast({ html: response, classes: 'success' })
               fav_button.classList = "btn-floating light-green lighten-1";
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


// -----------------------------------------------------------------------------Favourite------------------------------------------------------------------------------------------------

function addToCartFromFavourite(id) {
    var product_id = id;
    var cart_button = document.getElementById("cartButton" + id);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "Successfully added") {
                M.toast({ html: response, classes: 'success' })
            
                setTimeout(function () {
                    window.location.reload();
                }, 2000);

            } else {
                M.toast({ html: response, classes: 'error' })
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }


        }

    }
    request.open("GET", "addToCartProcess.php?id=" + product_id, true);
    request.send();
}

function deleteFromFavourite(id) {
    var product_id = id;

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Removed") {
                M.toast({ html: response, classes: 'success' })
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            } else {
                M.toast({ html: 'Something went wrong', classes: 'error' })
            }


        }

    }
    request.open("GET", "deleteFavouriteProductProcess.php?id=" + product_id, true);
    request.send();
}

function FavouriteRemoveAll() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Removed") {
                M.toast({ html: response, classes: 'success' })
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            } else {
                M.toast({ html: 'Something went wrong', classes: 'error' })
            }


        }

    }
    request.open("GET", "deleteAllFromFavourite.php", true);
    request.send();
}


// -------------------------------------------------------------------------------Profile-------------------------------------------------------------------------------

function saveProfile(){
var fname = document.getElementById("first_name");
var lname = document.getElementById("last_name");
var email = document.getElementById("email");
var gender = document.getElementById("gender");
var password = document.getElementById("password");
var line1 = document.getElementById("line1");
var line2 = document.getElementById("line2");
var city = document.getElementById("city");

var form = new FormData();
    form.append("fname", fname.value);
    form.append("lname", lname.value);
    form.append("email", email.value);
    form.append("gender", gender.value);
    form.append("password", password.value);
    form.append("line1", line1.value);
    form.append("line2", line2.value);
    form.append("city", city.value);

  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
            if (response == "Successfully Updated") {
                M.toast({ html: response, classes: 'success' })
            

            } else {
                M.toast({ html: response, classes: 'error' })
            }
          


        }

    }
    request.open("POST", "updateProfile.php", true);
    request.send(form);


}


function setPostalCode(){
   
    var city = document.getElementById("city").value;
    var postal = document.getElementById("postal");

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
           
          postal.value = response;


        }

    }
    request.open("GET", "setPostalId.php?id= " + city, true);
    request.send();

  
}









function admin1() {
    var signIn = document.getElementById("adminlogin1");
    var signUp = document.getElementById("adminlogin2");


    signUp.style.display = "block";
    signUp.style.display = "flex";
    signIn.style.display = "none"

}














