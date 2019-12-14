@extends('client/layouts/main')
@section('content')
@include('client/layouts/slider')
<div class="p_new">
    <div class="title wow fadeInUp" data-wow-duration="2s">
        <h1>Sản phẩm mới nhất</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach($productsNew as $productNew)
            <div class="col-md-3 col-6">
                <div class="p_nd wow fadeInUp selectProduct" data-title="{{$productNew->id}}"
                    data-id="{{ $productNew->name}}" data-size="{{$productNew->category->name}}"
                    data-weight="{{ $productNew->price }}" data-processor="{{ $productNew->description }}"
                    data-brand="{{ $productNew->brand->name }}">
                    <a href="{{route('detail', ['id' => $productNew->id])}}">
                        <img src="{{$productNew->picture}}" width="100%" alt="" class="imgFill productImg">
                    </a>
                    <div class="nd_hover">
                        <a href="{{route('member.add_to_favorite', ['id' => $productNew->id])}}"><i
                                class="fas fa-heart"></i></a>
                        <a href="{{route('detail', ['id' => $productNew->id])}}"><i class="far fa-eye"></i></a>
                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                    </div>
                    <a>
                        <h3>{{$productNew->name}}</h3>
                    </a>
                    <p>{{$productNew->price}}đ</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="all_cate">
    <div class="col-lg-11" style="margin: auto;">
        <div class="row">
            <div class="col-md-3 wow fadeInLeft" data-wow-duration="3s">
                <div class="img_cate">
                    <img src="client/images/cate1.jpg" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-duration="3s">
                <div class="w90">
                    <div class="img_cate">
                        <img src="client/images/cate3.jpg" width="100%" alt="">
                    </div>
                    <div class="img_cate">
                        <img src="client/images/cate5.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-duration="3s">
                <div class="img_cate">
                    <img src="client/images/cate2.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p_selling">
    <div class="title wow fadeInUp" data-wow-duration="2s">
        <h1>Sản phẩm bán chạy nhất</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach($productsMost as $productMost)
            <div class="col-md-3 col-6">
                <div class="p_nd wow fadeInUp selectProduct" data-title="{{$productMost->id}}"
                    data-id="{{$productMost->name}}" data-size="{{$productMost->price}}"
                    data-weight="{{ $productMost->price }}" data-processor="{{ $productMost->description }}"
                    data-brand="{{ $productMost->brand->name }}">
                    <a href="{{route('detail', ['id' => $productMost->id])}}">
                        <img src="{{$productMost->picture}}" width="100%" alt="" class="imgFill productImg">
                        <div class="nd_hover">
                            <a href="{{route('member.add_to_favorite', ['id' => $productMost->id])}}"><i
                                    class="fas fa-heart"></i></a>
                            <a href="{{route('detail', ['id' => $productMost->id])}}"><i class="far fa-eye"></i></a>
                            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                        </div>
                        <a href="{{route('detail', ['id' => $productMost->id])}}">
                            <h3>{{$productMost->name}}</h3>
                        </a>
                        <p>{{$productMost->price}}đ </p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="brand">
    <div class="col-lg-11" style="margin: auto;">
        <div class="title wow fadeInUp" data-wow-duration="2s">
            <h1>Các đối tác</h1>
        </div>
        <div class="owl-carousel owl-theme owl-loaded" id="sl1">
            <div class="owl-stage-outer  wow fadeInUp">
                <div class="owl-stage">
                    @foreach($brands as $brand)
                    <div class="owl-item">
                        <a href="{{$brand->link}}">
                            <img src="{{$brand->logo}}" width="100%">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('change'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
Swal.fire(
    'Thay đổi mật khẩu thành công!',
    'Ok'
)
</script>
@endif
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var showModal = {!!json_encode($showModal) !!};
    if (showModal)
        $('#dangnhap').modal('show');
});
</script>
<script>
$(document).ready(function() {
    var showModal = {!!json_encode($showModalSignup) !!};
    if (showModal)
        $('#dangky').modal('show');
});
</script>
