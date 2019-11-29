$(document).ready(function () {
    $('#imageGallery').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        thumbItem: 9,
        slideMargin: 0,
        enableDrag: false,
        currentPagerPosition: 'le ft',
    });
    $('formDemo').validate({
        rules: {
            content:
            {
                required: true,
                maxlength: 200
            },
        },
        messages: {
            content:
            {
                required: "Bạn phải nhập bình luận!",
                minlength: "Bạn không được nhập quá 200 kí tự!"
            },
        }
    });

    $("#formDemo1").validate({
        rules: {
            content:
            {
                required: true,
                maxlength: 200
            },
        },
        messages: {
            content:
            {
                required: "Bạn phải nhập bình luận!",
                minlength: "Bạn không được nhập quá 200 kí tự!"
            },
        }
    });
    
});

$('.reply').click(function() {
    $('.showreply').toggle('slow');
});