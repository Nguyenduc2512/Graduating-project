@extends('client/layouts/main')
@section('content')
   <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Tên Sản phẩm</span>
        </div>
    </div>

    <div class="detail_product">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul id="imageGallery">
                        <li data-thumb="client/images/1.png" data-src="client/images/1.png">
                            <img src="client/images/1.png" width="100%" />
                        </li>
                        <li data-thumb="client/images/2.png" data-src="client/images/2.png">
                            <img src="client/images/2.png" width="100%" />
                        </li>
                        <li data-thumb="client/images/3.png" data-src="client/images/3.png">
                            <img src="client/images/3.png" width="100%" />
                        </li>
                        <li data-thumb="client/images/4.png" data-src="client/images/4.png">
                            <img src="client/images/4.png" width="100%" />
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h3>Tên sản phẩm</h3>
                    <p>Giá bán: <span class="price">640.000đ</span></p>
                    <p>Tình trạng: Còn hàng</p>
                    <hr>
                    <p>Danh mục <span class="cate"><a href="cate.html">Nike</a></span></p>
                    <hr>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Size*</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">40</option>
                                            <option value="">41</option>
                                            <option value="">42</option>
                                            <option value="">43</option>
                                            <option value="">39</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Số lượng*</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <a href="order.html" class="btn btn-block btn-danger">Đăng ký mua</a>
                                </div>
                                <div class="col-6">
                                    <div class="linkcart">
                                        <a href="listcart.html"> Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 30px;">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Mô tả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Đánh giá nhận xét</a>
                </li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <h4>Mô tả</h4>
                    <p>Thiết kế trẻ trung.
                        Đường may tỉ mỉ.
                        Dễ dàng phối trang phục.
                        Đồng kiểm: xem hàng khi nhận hàng.
                        Chất liệu cao cấp.
                        Mũi giày tròn.
                        Đế bằng cao su tổng hợp; xẻ rãnh chống trơn trượt.
                        Thương Hiệu: PASSO.</p>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="col-lg-8">
                        <h4>Đánh giá nhận xét</h4>
                        <form action="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="client/images/member.png" width="100%" alt="">
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="text" placeholder="Thêm bình luận" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info">Bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection