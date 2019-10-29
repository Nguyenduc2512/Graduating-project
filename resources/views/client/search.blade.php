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
                        <select name="" id="">
                            <option value="">Sắp xếp theo</option>
                            <option value="">Mới nhất</option>
                            <option value="">Giá: Thấp - Cao</option>
                            <option value="">Giá: Cao - Thấp</option>
                        </select>
                    </div>
                    <div class="pcate">
                        <div class="row">
                            @foreach($productSearch as $ps)
                            <div class="col-md-3 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="{{$ps->picture}}" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>{{$ps->name}}</h3>
                                    </a>
                                    <p>{{$ps->price}} đ</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-12">
                                <ul class="pagination" style="float: right;">
                                    {{$productSearch->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection