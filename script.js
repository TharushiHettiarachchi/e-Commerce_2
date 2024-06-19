
function signUp() {
    var signIn = document.getElementById("signUp");
    var signUp = document.getElementById("signIn");

    if (signUp.style.display = "none") {
        signUp.style.display = "block";
        signUp.style.display = "flex";
        signIn.style.display = "none"
    }else{
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
    }else{
        signUp.style.display = "block";
        signUp.style.display = "flex";
        signIn.style.display = "none"
    }

}