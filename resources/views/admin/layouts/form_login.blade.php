<link rel="stylesheet" href="{{asset('client/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="{{asset('client/plugins/OwlCarousel2/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('client/css/style.css')}}">
<link rel="stylesheet" href="{{asset('client/css/lightslider.css')}}">
<link rel="stylesheet" href="{{asset('client/css/detail-p.css')}}">
<link rel="icon" href="{{asset('client/images/icon.png')}}">
<header>
    <!-- top_bar -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><i class="fas fa-phone"></i> Hotline: <a href="tel:0123.456.789">0123.456.789</a></p>
                </div>
                <div class="col-md-6">
                    <div class="mn0">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#dangnhap" role="dialog"><i
                                        class="fas fa-sign-in-alt"></i> Đăng nhập
                                </a>
                                <div class="modal fade" id="dangnhap">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Đăng Nhập</h4>
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="client/images/logoblue.png" width="100%" alt="">
                                                    </div>
                                                    <div class="col-md-6" style="margin: auto;">
                                                        <form action="{{route('login_admin')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="email"
                                                    n                       placeholder="Nhập email của bạn">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Mật khẩu</label>
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control" name="password"
                                                                           placeholder="Nhập mật khẩu của bạn">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info">
                                                                    Đăng nhập
                                                                </button>
                                                                <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">
                                                                    Thoát
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu -->
</header>
@include('client/layouts/slider')
<script src="client/plugins/bootstrap/js/jquery.slim.min.js"></script>
<script src="client/plugins/bootstrap/js/popper.min.js"></script>
<script src="client/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="client/plugins/OwlCarousel2/js/owl.carousel.min.js"></script>

<script src="client/js/js.js"></script>
<script src="client/js/wow.min.js"></script>
<script src="client/js/detailp.js"></script>
<script src="client/js/lightslider.js"></script>
<script>
    new WOW().init();
</script>
