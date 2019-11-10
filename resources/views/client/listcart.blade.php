@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Giỏ hàng của bạn</span>
        </div>
    </div>

    <div class="listcart">
        <div class="container">
            <h2>Giỏ hàng <span>(2 sản phẩm)</span></h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="sp" style=" padding-top: 10px;">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{url('/')}}/client/images/p1.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-5">
                                <h3><a href="detail-product.html">Tên sản phẩm</a></h3>
                                <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                                <p>Cung cấp bởi <a href="index.html">Auth Shose</a></p>
                                <div class="linkdel">
                                    <a href="#">Xóa</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="allprice">
                                    <button class="qt-minus">-</button>
                                    <button class="qt">1</button>
                                    <button class="qt-plus">+</button>
                                    <br><br>
                                    Giá: <span class="price">
                                        1000000 đ
                                    </span>
                                    <br>
                                    Tổng tiền: <span class="full-price">
                                        1000000 đ
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp" style=" padding-top: 10px;">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{url('/')}}/client/images/p1.jpg" width="100%" alt="">
                            </div>
                            <div class="col-md-5">
                                <h3><a href="detail-product.html">Tên sản phẩm</a></h3>
                                <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                                <p>Cung cấp bởi <a href="index.html">Auth Shose</a></p>
                                <div class="linkdel">
                                    <a href="#">Xóa</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="allprice">
                                    <button class="qt-minus">-</button>
                                    <button class="qt">1</button>
                                    <button class="qt-plus">+</button>
                                    <br><br>
                                    Giá: <span class="price">
                                        2000000 đ
                                    </span>
                                    <br>
                                    Tổng tiền: <span class="full-price">
                                        2000000 đ
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="site-footer">
                                                @if (session('msg'))
                                <p  style="color: red">{{ session('msg') }}</p>
                                @endif
                        <form action="{{route('member.promo')}}" method="post" enctype="multipart/form-data">
                            @csrf
                             <input type="hidden" name="role" value="{{Auth::user()->role}}">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" name="code" value="{{session()->get('coupon')['code']}}" placeholder="Nhập mã giảm giá">

                            </div>
                            <div class="col-4">
                                <button type="submit">Đồng ý</button>
                            </div>
                        </div>
                    </form>
                        <h2 class="subtotal">Tổng phụ: <span>1000.000</span> đ</h2>
                        <h3 class="km5">Giảm(<span class="km6">{{session()->get('coupon')['down']}}</span>%): -<span class="km7">0</span> đ</h3>

                        <h2 class="total">Thành tiền: <span>1900000 </span> đ</h2>
                        <button class="btn btn-block">Tiến hành đặt hàng</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
