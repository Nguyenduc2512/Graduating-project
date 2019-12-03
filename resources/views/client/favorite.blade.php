@extends('client/layouts/main')
@section('content')
<div class="path_link">
    <div class="container">
        <a href="index.html">Trang chủ</a> > <span>Yêu thích</span>
    </div>
</div>

<div class="listfavorite">
    <div class="container">
        <h2><span>Sản phẩm yêu thích của bạn</span></h2>
        @foreach($favorites as $favorite)
        <div class="sp" style=" padding-top: 10px;">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset($favorite->product->picture)}}" width="100%" alt="">
                </div>
                <div class="col-md-5">
                    <h3><a href="detail-product.html">{{$favorite->product->name}}</a></h3>
                    <div class="linkdel">
                        <a href="{{route('member.remove_item', ['id' => $favorite->id])}}">Xem chi
                            tiết</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="allprice">
                        Giá: <span class="price">
                            {{$favorite->product->price}} đ </span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection