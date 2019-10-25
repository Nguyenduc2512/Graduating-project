@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Lịch sử mua hàng</span>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="li-member" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-3">
                                <img src="images/member.png" width="100%" alt="">
                            </div>
                            <div class="col-9">
                                <span>Tài khoản của</span>
                                <p style="font-weight: bold;">Trịnh Quốc Hưng</p>
                            </div>
                        </div>
                    </div>
                    <div class="li-member">
                        <a href="editcustomer.html">Thông tin tài khoản</a>
                    </div>
                    <div class="li-member">
                        <a href="hiscart.html">Lịch sử mua hàng</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="title">
                        <h2 class="text_title"><span>Lịch sử mua hàng</span></h2>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Ngày mua</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Trạng thái
                                    đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>761858619</td>
                                <td>14/10/2019</td>
                                <td>Giày nike</td>
                                <td>820000đ</td>
                                <td>Giao hàng thành công</td>
                            </tr>
                            <tr>
                                <td>761858619</td>
                                <td>12/10/2019</td>
                                <td>Giày nike</td>
                                <td>820000đ</td>
                                <td>Giao hàng thành công</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection