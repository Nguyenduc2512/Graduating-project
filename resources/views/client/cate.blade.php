@extends('client/layouts/main')
@section('content')
   <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Tên danh mục</span>
        </div>
    </div>

    <div class="cate">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="fitter">
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h3>Tên dang mục</h3>
                                <div class="col-lg-12">
                                    <a href="#"> Nike <span>(14)</span></a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#"> Addidas <span>(7)</span></a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#"> Gucci <span>(12)</span></a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#"> Converse <span>(14)</span></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <h3 style="margin-top: 20px;">Size</h3>
                                <form action="">
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 39
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 40
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 41
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 42
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 43
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
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
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p1.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Nike 1</h3>
                                    </a>
                                    <p>630.000 đ</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p2.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Adidas 1</h3>
                                    </a>
                                    <p>430.000 đ</p>

                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p3.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Gucci 1</h3>
                                    </a>
                                    <p>730.000 đ</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p1.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Nike 1</h3>
                                    </a>
                                    <p>630.000 đ</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p2.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Adidas 1</h3>
                                    </a>
                                    <p>430.000 đ</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="#"> <img src="client/images/p3.jpg" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="#">
                                        <h3>Gucci 1</h3>
                                    </a>
                                    <p>730.000 đ</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="pagination" style="float: right;">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection