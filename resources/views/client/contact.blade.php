@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Liên hệ</span>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h2 class="text_title"><span>Gửi liên hệ về Auth Shose</span></h2>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email của bạn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Điện thoại">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">--Chọn chủ đề liên hệ--</option>
                                        <option value="">Cần tư vấn mua hàng</option>
                                        <option value="">Hỏi về tình trang đơn hàng</option>
                                        <option value="">Phàn nàn dịch vụ</option>
                                        <option value="">Bạn muốn làm đối tác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="4" class="form-control"
                                        placeholder="Nội dung liên hệ"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Gửi liên hệ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="title">
                        <h2 class="text_title"><span>Thông tin liên hệ</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="pull-left fa fa-home"></i> <strong>Trụ sở chính:</strong> <br>
                                15 Đông Quan Cầu Giấy Hà Nội
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="pull-left fa fa-phone"></i> <strong>Điện thoại:</strong> <br>
                                0123.456.789
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="far fa-envelope"></i> <strong>Email:</strong> <br>
                                info@authshose.com
                            </div>
                            <p style="font-size: 14px;">Website www.authshose.com là website chuyên bán các dòng sản
                                phẩm về giày với các thương
                                hiệu
                                lớn: Nike, Gucci, Addidas, Convers,...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="map">
                <div class="col-lg-6" style="margin: auto;">
                    <div class="title">
                        <h2 class="text_title"><span>Bản đồ đến với Auth Shose</span></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8276297077596!2d105.80170781493275!3d21.039581885992376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd4272871c5%3A0x52e3cbbb662f8b60!2sShop%20b%C3%A1n%20gi%C3%A0y%20Auth%20Shose!5e0!3m2!1svi!2s!4v1571453250440!5m2!1svi!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection