    <script src="{{asset('client/plugins/bootstrap/js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('client/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('client/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/plugins/OwlCarousel2/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('client/js/js.js')}}"></script>
    <script src="{{asset('client/js/cart.js')}}"></script>
    <script src="{{asset('client/js/wow.min.js')}}"></script>
    <script src="{{asset('client/js/detailp.js')}}"></script>
    <script src="{{asset('client/js/lightslider.js')}}"></script>    
    <script src="{{asset('client/js/compare.js')}}"></script>



    
    <script>
        new WOW().init();
    </script>

<script type="text/javascript">
    $(document).ready(function(){
    function getBase64(file, selector) {
       var reader = new FileReader();
       reader.readAsDataURL(file);
       reader.onload = function () {
        $(selector).attr('src', reader.result);
       };
       reader.onerror = function (error) {
         console.log('Error: ', error);
       };
    }
    var img = document.querySelector('#image');
    img.onchange = function(){
      var file = this.files[0];
      if(file == undefined){
        $('#imageTarget').attr('src', "{{asset('/admin/dist/img/photo1.png')}}");
      }else{
        getBase64(file, '#imageTarget');
      }
    }
    });
  </script>
