// Material CSS Scripts


//--------------------------------------------Fixed Action Button ----------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        direction: 'left'
    });
});

// ------------------------------------------------SideNav-----------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
});

// -----------------------------------------------Carousel-------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.carousel');
    var options = {
        duration: 200, 
        fullWidth: true, 
        indicators: true, 
        autoplay: true 
    };
    var instances = M.Carousel.init(elems, options);

   
    setInterval(() => {
        instances.forEach(instance => instance.next());
    }, 5000); 
});

// ------------------------------------------------Model--------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
});

// -------------------------------------------------Select---------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});


});



