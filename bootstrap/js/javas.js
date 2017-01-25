$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".navbar").addClass(" navbar-fixed-top navbarmod");
    } else {
        $(".navbar").removeClass(" navbar-fixed-top navbarmod");
    }
});
