$(document).ready(function(){
    $("#landing .owl-carousel").owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
//        animateOut: 'fadeOut',
        touchDrag: true,
        mouseDrag: true,
        dots: false
    });

});