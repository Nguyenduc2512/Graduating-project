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
                                                        <form action="{{route('new_account')}}" enctype="multipart/form-data" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Tên</label>
                                                                        <input type="text" class="form-control" name="name"
                                                                               placeholder="Nhập tên của bạn" value="{{old('name')}}">
                                                                        @if($errors->first('name'))
                                                                            <span class="text-danger"> {{$errors->first('name')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input type="email" class="form-control" name="email"
                                                                               placeholder="Nhập email của bạn" value="{{old('email')}}">
                                                                        @if($errors->first('email'))
                                                                            <span class="text-danger"> {{$errors->first('email')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Ngày sinh</label>
                                                                        <input type="date" class="form-control" name="date_of_birth"
                                                                               placeholder="Nhập ngày sinh của bạn" value="{{old('date_of_birth')}}">
                                                                        @if($errors->first('date_of_birth'))
                                                                            <span class="text-danger"> {{$errors->first('date_of_birth')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Mật khẩu</label>
                                                                        <input type="password" class="form-control" name="password"
                                                                               placeholder="Nhập mật khẩu của bạn">
                                                                        @if($errors->first('password'))
                                                                            <span class="text-danger"> {{$errors->first('password')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Chọn ảnh đại điện</label>
                                                                        <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}">
                                                                        @if($errors->first('avatar'))
                                                                            <span class="text-danger"> {{$errors->first('avatar')}} </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Giới tính</label>
                                                                        <select name="gender" id="" class="form-control">
                                                                            <option value="1">Nam</option>
                                                                            <option value="2">Nữ</option>
                                                                            <option value="3">Khác</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Số điện thoại</label>
                                                                        <input type="number" class="form-control" name="phone"
                                                                               placeholder="Nhập sđt của bạn" value="{{old('phone')}}">
                                                                        @if($errors->first('phone'))
                                                                            <span class="text-danger"> {{$errors->first('phone')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Địa chỉ</label>
                                                                        <input type="text" class="form-control" name="location"
                                                                               placeholder="Nhập địa chỉ của bạn" value="{{old('location')}}">
                                                                        @if($errors->first('location'))
                                                                            <span class="text-danger"> {{$errors->first('location')}} </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Xác nhận mật khẩu</label>
                                                                        <input type="password" class="form-control" name="confirm_pass"
                                                                               placeholder="Nhập mật khẩu của bạn">
                                                                        @if($errors->first('confirm_pass'))
                                                                            <span class="text-danger"> {{$errors->first('confirm_pass')}} </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="role" value="0">
                                                            <input type="hidden" name="status" value="1">
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
                                                                    @if (session('success'))
                                                                        <p class="text-danger"> {{session('success')}} </p>
                                                                    @endif
                                                                    @if (session('false'))
                                                                        <p class="text-danger"> {{session('false')}} </p>
                                                                    @endif
                                                                    <a href="{{ route('password.request') }}" data-target="#reset" role="dialog" style="color: red;">Quên mật khẩu?</a>

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
                                            <a class="dropdown-item" href="{{route('member.list_cart')}}"><i
                                                    class="fas fa-shopping-cart"></i> Giỏ hàng của bạn</a>
                                            <a class="dropdown-item" href="{{route('member.history')}}"><i class="fas fa-history"></i>
                                                Lịch sử mua hàng</a>
                                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Đăng
                                                xuất</a>
                                        </div>
                                    </div>
                                </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#order_cart" role="dialog">
                                        </a>
                                        <div class="modal fade" id="order_cart">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{route('member.new_order')}}" method="post" id="form_order" >
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-10 align-content-center">
                                                                <div class="title">
                                                                    <h2 class="text_title"><span>Thông tin liên hệ giao hàng</span></h2>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Họ và tên *</label>
                                                                    <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Email</label>
                                                                    <input type="email" class="form-control" value="{{Auth::user()->email}}" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Số điện thoại *</label>
                                                                    <input type="number" class="form-control" value="{{Auth::user()->phone}}" disabled>
                                                                </div>
                                                                <div class="title">
                                                                    <h2 class="text_title"><span>Địa chỉ giao hàng</span></h2>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Địa chỉ  *</label>
                                                                    <input type="text" class="form-control" value="{{Auth::user()->location}}" name="location" id="location">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Ghi chú *</label>
                                                                    <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-12" style="text-align: center;
                         padding-bottom: 50px; margin-top: 20px;">
                                                                <a class="btn btn-danger" onclick="submit_order()">Đặt hàng</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{url('/')}}/{{$webs->logoblue}}" height="80" alt="">
                </a>
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
                                <span>
                                    @if(Auth::user())
                                        {{$count}}
                                    @else
                                        0
                                    @endif
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
