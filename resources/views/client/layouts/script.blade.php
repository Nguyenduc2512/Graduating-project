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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
   
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
  <script type="text/javascript">
    $(document).ready(function(){
      $(".findBtn").click(function(){
        var se = $("#seID").val();
        var cate = $("#cateID").val();
        var price = $("#priceID").val();

        var brand = [];
        $(".brand").each(function(){
           if($(this).is(":checked")){
            brand.push($(this).val());

           }
        });
        Finalbrand = brand.toString();
        $.ajax({
          type: 'get',
          dataType: 'html',
          url: '{{url('/proCate')}}',
          data: 'brand_id=' + Finalbrand + '&id=' + cate +'&price=' + price +'&se=' + se ,
          success:function(response){
            console.log(response);
            $("#productData").html(response);
          }
        });
      });

    });
  </script>
    <script type="text/javascript">
        function select_size()
        {
            var selectBox = document.getElementById("color_id");
            var selectedValue = selectBox.options[selectBox.selectedIndex].id;
                document.getElementById("size").innerHTML = selectedValue;
        }
    </script>
    
