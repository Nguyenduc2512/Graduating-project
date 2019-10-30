@extends('client/layouts/main')
@section('content')
    @include('client/layouts/slider')

    <div class="p_new">
        <div class="title wow fadeInUp">
            <h1>Sản phẩm mới nhất</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach($productNew as $pn)
                <div class="col-md-3 col-6">
                    <div class="p_nd wow fadeInUp">
                        <a href="detail-product"> <img src="{{url('/')}}/{{$pn->picture}}" width="100%" alt=""></a>
                        <div class="nd_hover">
                            <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                            <a href="detail"><i class="far fa-eye"></i></a>
                            <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                        </div>
                        <a href="detail">
                            <h3>{{$pn->name}}</h3>
                        </a>
                        <p>{{$pn->price}}đ</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="all_cate">
        <div class="col-lg-11" style="margin: auto;">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft">
                    <div class="img_cate">
                        <a href="cate.html"> <img src="client/images/cate1.jpg" width="100%" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp">
                    <div class="w90">
                        <div class="img_cate">
                            <a href="cate.html"> <img src="client/images/cate3.jpg" width="100%" alt=""></a>
                        </div>
                        <div class="img_cate">
                            <a href="cate.html"><img src="client/images/cate5.jpg" width="100%" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInRight">
                    <div class="img_cate">
                        <a href="cate.html"><img src="client/images/cate2.jpg" width="100%" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p_selling">
        <div class="title wow fadeInUp">
            <h1>Sản phẩm bán chạy nhất</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach($productMost as $pm)
                <div class="col-md-3 col-6">
                    <div class="p_nd wow fadeInUp">
                        <a href="detail-product"> <img src="{{url('/')}}/{{$pm->picture}}" width="100%" alt=""></a>
                        <div class="nd_hover">
                            <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                            <a href="detail"><i class="far fa-eye"></i></a>
                            <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                        </div>
                        <a href="detail">
                            <h3>{{$pm->name}}</h3>
                        </a>
                        <p>{{$pm->price}}đ <span class="km">750.000đ</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="brand">
        <div class="col-lg-11" style="margin: auto;">
            <div class="title wow fadeInUp">
                <h1>Các đối tác</h1>
            </div>
            <div class="owl-carousel owl-theme owl-loaded" id="sl1">
                <div class="owl-stage-outer  wow fadeInUp">
                    <div class="owl-stage">
                        @foreach($brands as $b)
                        <div class="owl-item">
                            <a href="#">
                                <img src="{{url('/')}}/{{$b->logo}}" width="100%">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        var showModal = {!! json_encode($showModal) !!};
        if (showModal)
            $('#dangnhap').modal('show');
    });
</script>
