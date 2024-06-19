
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

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });