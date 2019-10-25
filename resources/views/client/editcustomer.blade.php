@extends('client/layouts/main')
@section('content')
<div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Sửa thông tin của bạn</span>
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
                        <h2 class="text_title"><span>Sửa thông tin tài khoản</span></h2>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" class="form-control" value="Hưng">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="hung@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày sinh</label>
                                    <input type="date" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" placeholder="Xác nhận khẩu của bạn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giới tính</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Nam</option>
                                        <option value="">Nữ</option>
                                        <option value="">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="number" class="form-control" value="032646464">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" class="form-control" value="Hà Nội.......">
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh đại diện mới</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div style="margin: auto; width: 100px; margin-bottom: 50px;">
                            <button type="submit" class="btn btn-info">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection