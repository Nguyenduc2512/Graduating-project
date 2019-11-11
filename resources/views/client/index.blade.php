@extends('client/layouts/main')
@section('content')
    @include('client/layouts/slider')
    <div class="p_new">
        <div class="title wow fadeInUp">
            <h1>Sản phẩm mới nhất</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach($productsNew as $productNew)
                    <a href="{{route('detail', ['id' => $productNew->id])}}">
                        <div class="col-md-3 col-6">
                            <div class="p_nd wow fadeInUp">
                                <img src="{{$productNew->picture}}" width="100%" alt="">
                                <div class="nd_hover">
                                    <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                                    <a href="{{route('detail', ['id' => $productNew->id])}}"><i class="far fa-eye"></i></a>
                                    <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                </div>
                                    <h3>{{$productNew->name}}</h3>
                                <p>{{$productNew->price}}đ</p>
                            </div>
                        </div>
                    </a>
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
                @foreach($productsMost as $productMost)
                    <a href="{{route('detail', ['id' => $productMost->id])}}">
                        <div class="col-md-3 col-6">
                            <div class="p_nd wow fadeInUp">
                                <img src="{{$productMost->picture}}" width="100%" alt="">
                                <div class="nd_hover">
                                    <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                                    <a href="{{route('detail', ['id' => $productMost->id])}}"><i class="far fa-eye"></i></a>
                                    <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                </div>
                                    <h3>{{$productMost->name}}</h3>
                                <p>{{$productMost->price}}đ </p>
                            </div>
                        </div>
                    </a>

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
                        @foreach($brands as $brand)
                        <div class="owl-item">
                            <a href="#">
                                <img src="{{$brand->logo}}" width="100%">
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
