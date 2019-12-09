@extends('client/layouts/main')
@section('content')
   <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Tìm kiếm sản phẩm</span>
        </div>
    </div>

    <div class="cate">
        <div class="container">
            <h2>{{$msg}}</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="sortby">
                        <select name="" id="seID" class="findSearch">
                            <option value="">Sắp xếp theo</option>
                            <option value="new">Mới nhất</option>
                            <option value="asc">Giá: Thấp - Cao</option>
                            <option value="desc">Giá: Cao - Thấp</option>
                        </select>
                    </div>
                    <input type="hidden" id="kw" value="{{$kw}}">
                    <div class="pcate">
                        <div class="row" id="productSearch">
                            @include('client/proSearch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('client/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
    $(".findSearch").click(function(){
        var se = $("#seID").val();
        var kw = $("#kw").val();
    
        $.ajax({
          type: 'get',
          dataType: 'html',
          url: "/proSearch?&kw=" + kw +"&se=" + se,
          success:function(response){
            console.log(response);
            $("#productSearch").html(response);
          }
        });
      });
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault(); 
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

        function fetch_data(page){
        var se = $("#seID").val();
        var kw = $("#kw").val();

        $.ajax({
        url:"/search/paginate?page="+page+"&kw=" + kw +"&se=" + se,
        success:function(data)
        {
        $('#productSearch').html(data);
       }
        });
        }
</script>
@endsection
