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
                    <div class="col-md-3 col-6">
                        <div class="p_nd wow fadeInUp selectProduct"  data-title="{{$productNew->id}}" data-id="{{ $productNew->name}}" data-size="{{$productNew->price}}" data-weight="{{ $productNew->price }}"  data-processor="{{ $productNew->description }}">
                            <a href="{{route('detail', ['id' => $productNew->id])}}"> 
                                <img src="{{$productNew->picture}}" width="100%" alt="" class="imgFill productImg">
                            </a>
                            <div class="nd_hover">
                                <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                                <a href="{{route('detail', ['id' => $productNew->id])}}"><i class="far fa-eye"></i></a>
                                <a class=" addButtonCircular addToCompare"> <i class="fas fa-less-than-equal"></i></a>
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
                <div class="col-md-3 col-6">
                    <div class="p_nd wow fadeInUp selectProduct"  data-title="{{$productMost->id}}" data-id="{{$productMost->name}}" data-size="{{$productMost->price}}" data-weight="{{ $productMost->price }}"  data-processor="{{ $productMost->description }}">
                        <a href="{{route('detail', ['id' => $productMost->id])}}">
                        <a href="detail-product"> <img src="{{$productMost->picture}}" width="100%" alt="" class="imgFill productImg"></a>
                        <div class="nd_hover">
                            <a href="listcart"><i class="fas fa-cart-plus"></i></a>
                            <a href="{{route('detail', ['id' => $productMost->id])}}"><i class="far fa-eye"></i></a>
                            <a class=" addButtonCircular addToCompare"> <i class="fas fa-less-than-equal"></i></a>
                        </div>
                        <a href="{{route('detail', ['id' => $productMost->id])}}">
                            <h3>{{$productMost->name}}</h3>
                        </a>
                        <p>{{$productMost->price}}đ </p>
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
    <div class="w3-container  w3-center">
        <div class="w3-row w3-card-4 w3-grey w3-round-large w3-border comparePanle w3-margin-top">
            <div class="w3-row">
                <div class="w3-col l9 m8 s6 w3-margin-top">
                    <h4>Đã thêm sản phẩm so sánh</h4>
                </div>
                <div class="w3-col l3 m4 s6 w3-margin-top">
                     
                    <button class="w3-btn w3-round-small w3-white w3-border notActive cmprBtn" disabled>So sánh</button>
                </div>
            </div>
            <div class=" titleMargin w3-container comparePan">
            </div>
        </div>
    </div>
    <!--end of preview panel-->

    <!-- comparision popup-->
    <div id="id01" class="w3-animate-zoom w3-white w3-modal modPos">
        <div class="w3-container">
            <a onclick="document.getElementById('id01').style.display='none'"
                class="whiteFont w3-padding w3-closebtn closeBtn">×</a>
        </div>
        <div class="w3-row contentPop w3-margin-top">

        </div>

    </div>
    <!--end of comparision popup-->

    <!--  warning model  -->
    <div id="WarningModal" class="w3-modal">
        <div class="w3-modal-content warningModal">
            <header class="w3-container w3-teal">
                <h3><span>⚠</span> Ôi không!</h3>
            </header>
            <div class="w3-container">
                <h4 style="color: white">Tối đa ba sản phẩm được phép so sánh</h4>
            </div>
            <div class="w3-container w3-right-align">
                <button id="warningModalClose" onclick="document.getElementById('id01').style.display='none'"
                    class="w3-btn w3-hexagonBlue w3-margin-bottom  ">Ok</button>
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
