<header>
        <!-- top_bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p><i class="fas fa-phone"></i> Hotline: <a href="tel:0123.456.789">{{$webs->hotline}}</a></p>
                    </div>
                    <div class="col-6">
                        <div class="mn0">
                            @if(!Auth::user())
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#dangky"><i class="far fa-edit"></i>
                                            Đăng ký</a>
                                        <div class="modal fade" id="dangky">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Đăng ký</h4>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">&times;
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Tên</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Nhập tên của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input type="email" class="form-control"
                                                                               placeholder="Nhập email của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Ngày sinh</label>
                                                                        <input type="date" class="form-control"
                                                                               placeholder="Nhập ngày sinh của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Mật khẩu</label>
                                                                        <input type="password" class="form-control"
                                                                               placeholder="Nhập mật khẩu của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Chọn ảnh đại điện</label>
                                                                        <input type="file" class="form-control"
                                                                               placeholder="Nhập mật khẩu của bạn">
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
                                                                        <input type="number" class="form-control"
                                                                               placeholder="Nhập sđt của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Địa chỉ</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Nhập địa chỉ của bạn">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Xác nhận mật khẩu</label>
                                                                        <input type="password" class="form-control"
                                                                               placeholder="Nhập mật khẩu của bạn">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info">
                                                                    Đăng ký
                                                                </button>
                                                                <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Thoát</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
                                                                <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" name="email"
                                                                                   placeholder="Nhập email của bạn">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Mật khẩu</label>
                                                                        <div class="input-group">
                                                                            <input type="password" class="form-control" name="password"
                                                                                   placeholder="Nhập mật khẩu của bạn">
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('password.request') }}" data-target="#reset" role="dialog" style="color: red;">Quên mật khẩu?</a>

                                                                    @if (session('false'))
                                                                        <p class="text-danger"> {{session('false')}} </p>
                                                                    @endif
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
                            @else
                                <ul>
                                    <li>
                                    <div class="dropdown">
                                        <a data-toggle="dropdown" style="color: white;">
                                            <i class="fas fa-user-alt"></i> {{Auth::user()->name}}
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('member.profile')}}"><i
                                                    class="fas fa-user-edit"></i> Chỉnh sửa
                                                tài khoản</a>
                                            <a class="dropdown-item" href="listcart"><i
                                                    class="fas fa-shopping-cart"></i> Giỏ hàng của bạn</a>
                                            <a class="dropdown-item" href="hiscart"><i class="fas fa-history"></i>
                                                Lịch sửa
                                                mua hàng</a>
                                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Đăng
                                                xuất</a>
                                        </div>
                                    </div>
                                </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">Giới thiệu</a>
                        </li>
                        <li class="dropdown" style="margin-top: 8px">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   @foreach($category as $cate)
                                       <li class="nav-item">
                                           <a class="nav-link" href="{{route('cate', ['id' => $cate->id])}}">{{$cate->name}}</a>
                                       </li>
                                   @endforeach
                                </ul>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
                        </li>
                        <form action="{{route('search')}}" method="get" class="searchform navbar-form" role="search">
                            <input type="hidden" value="search" name="view">
                            <div class="input-group">
                                <input type="text" name="keyWord" required class="form-control" placeholder="Search"
                                    name="q">
                                <div class="input-group-btn">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <li class="nav-item">
                            <div class="link_cart">
                                <a href="{{route('member.list_cart')}}"><i class="fa fa-shopping-cart"></i></a> 
                                <span>1</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
