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
                <div class="col-md-9" style="border: 1px solid #ddd; padding-top: 10px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/p1.jpg" width="100%" alt="">
                        </div>
                        <div class="col-md-4">
                            <h3><a href="detail-product.html">Tên sản phẩm</a></h3>
                            <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                            <p>Cung cấp bởi <a href="index.html">Auth Shose</a></p>
                            <div class="linkdel">
                                <a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-6">
                                    <p>650000 đ</p>
                                    <span style="text-decoration: line-through;">780000 đ</span>
                                </div>
                                <div class="col-6">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <input type="text" value="1" />
                                        <button class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart1">
                        <p> Tạm tính <span style="float: right;">650000 đ</span></p>
                        <hr>
                        <p> Thành tiền <span style="font-size: 20px; color: red; float: right;">650000 đ</span></p>
                    </div>
                    <a class="btn btn-block btn-danger" href="order.html">Tiến hành đặt hàng</a>
                    <div class="cart2">
                        <p>Mã giảm giá/ Quà tặng</p>
                        <div class="f-order">
                            <input type="text" placeholder="Nhập ở đây">
                            <button type="submit" class="btn-info">Đồng ý</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9" style="border: 1px solid #ddd; padding-top: 10px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/p2.jpg" width="100%" alt="">
                        </div>
                        <div class="col-md-4">
                            <h3><a href="detail-product.html">Tên sản phẩm</a></h3>
                            <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                            <p>Cung cấp bởi <a href="index.html">Auth Shose</a></p>
                            <div class="linkdel">
                                <a href="#">Xóa</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-6">
                                    <p>759.000 đ</p>
                                    <span style="text-decoration: line-through;">800.000 đ</span>
                                </div>
                                <div class="col-6">
                                    <div class="number">
                                        <button class="minus">-</button>
                                        <input type="text" value="1" />
                                        <button class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart1">
                        <p> Tạm tính <span style="float: right;">759000đ</span></p>
                        <hr>
                        <p> Thành tiền <span style="font-size: 20px; color: red; float: right;">759000đ</span></p>
                    </div>
                    <a class="btn btn-block btn-danger" href="order.html">Tiến hành đặt hàng</a>
                    <div class="cart2">
                        <p>Mã giảm giá/ Quà tặng</p>
                        <div class="f-order">
                            <input type="text" placeholder="Nhập ở đây">
                            <button type="submit" class="btn-info">Đồng ý</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection