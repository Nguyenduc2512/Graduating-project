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
                    {{$about->info}}
                </p>
                <h2>Sứ mệnh</h2>
                <p>
                    {{$about->mission}}
                </p>
                <h2>TẦM NHÌN</h2>
                <p>
                    {{$about->vision}}
                    website: AuthShoes.com
                </p>
                <h5>{{$about->slogan}}</h5>
            </div>
        </div>
    </div>
</div>
@endsection