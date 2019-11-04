@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Giới thiệu Auth-Shoes</span>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>Giới thiệu Auth Shoes</h1>
                    <p>
                        {{$about->gioi_thieu}}
                    </p>
                    <h2>Sứ mệnh</h2>
                    <p>
                        {{$about->su_menh}}
                    </p>
                    <h2>TẦM NHÌN</h2>
                    <p>
                        {{$about->tam_nhin}}
                        website: AuthShoes.com
                    </p>
                    <h5>{{$about->slogan}}</h5>
                </div>
                <div class="col-md-3">
                    <h3>Sản phẩm mới nhất</h3>
                    @foreach($productsNew as $productNew)
                    <div class="col-12">
                        <div class="p_nd">
                            <a href="#"> <img src="{{url('/')}}/{{$productNew->picture}}" width="100%" alt=""></a>
                            <div class="nd_hover">
                                <a href="#"><i class="fas fa-cart-plus"></i></a>
                                <a href="{{route('detail', ['id' => $productNew->id])}}"><i class="far fa-eye"></i></a>
                                <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                            </div>
                            <a href="{{route('detail', ['id' => $productNew->id])}}">
                                <h3>{{$productNew->name}}</h3>
                            </a>
                            <p>{{$productNew->price}} đ</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection