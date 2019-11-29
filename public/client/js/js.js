$(window).scroll(function () {
    if ($(window).scrollTop() >= 350) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});

$(document).ready(function () {

});

// slide
$('#sl1').owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        "<i class='fas fa-arrow-circle-left'></i>",
        "<i class='fas fa-arrow-circle-right'></i>",
    ],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});

$(document).ready(function () {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});