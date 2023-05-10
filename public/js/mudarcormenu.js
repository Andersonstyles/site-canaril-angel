$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll > 500) {
        $('.menu').addClass('menu-auxiliar');
    } else {
        $('.menu').removeClass('menu-auxiliar');
    }
});
