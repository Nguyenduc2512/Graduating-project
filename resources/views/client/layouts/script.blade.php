    <script src="{{asset('client/plugins/bootstrap/js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('client/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('client/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/plugins/OwlCarousel2/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('client/js/js.js')}}"></script>
    <script src="{{asset('client/js/cart.js')}}"></script>
    <script src="{{asset('client/js/wow.min.js')}}"></script>
    <script src="{{asset('client/js/detailp.js')}}"></script>
    <script src="{{asset('client/js/lightslider.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            
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
        </script>

    