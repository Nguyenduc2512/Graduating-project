<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin1" class="brand-link">
        <img src="{{url('/')}}/admin/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Auth Shoes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('/')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <!--menu-open -->
                    <a href="#" class="nav-link bg-info">
                        <i class="fab fa-product-hunt"></i>
                        <p>
                            Sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.show_product')}}" class="nav-link active">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.show_color')}}" class="nav-link active">
                                <i class="fas fa-palette"></i>
                                <p>Màu sắc sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.list_category') }}" class="nav-link active">
                                <i class="far fa-calendar-alt"></i>
                                <p>
                                    Danh mục sản phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.list_promo')}}" class="nav-link active">
                                <i class="fas fa-code"></i>
                                <p>
                                    Mã giảm giá
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.list_ship')}}" class="nav-link active">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Danh sách vận chuyển</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/admin1/cart" class="nav-link bg-info">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Đơn hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_cart')}}" class="nav-link active">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Danh sách đơn hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.list_comment')}}" class="nav-link bg-info">
                        <i class="far fa-comments"></i>
                        <p>
                            Phản hồi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_comment')}}" class="nav-link active">
                                <i class="fas fa-calendar-alt nav-icon"></i>
                                <p>Danh sách phản hồi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link bg-info">
                        <i class="far fa-user"></i>
                        <p>
                            Quản lí tài khoản
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <i class="far fa-address-card nav-icon"></i>
                                <p>Danh sách khách hàng</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_admin')}}" class="nav-link active">
                                <i class="far fa-address-card nav-icon"></i>
                                <p>Danh sách quản trị viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="/admin1/contact" class="nav-link bg-info">
                        <i class="far fa-comment-alt"></i>
                        <p>
                            Các liên hệ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.contact')}}" class="nav-link active">
                                <i class="fas fa-comment-alt nav-icon"></i>
                                <p>Danh sách liên hệ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <!--menu-open -->
                    <a href="{{route('admin.list_brand')}}" class="nav-link bg-info">
                        <i class="fas fa-user-shield"></i>
                        <p>
                            Quản lý đối tác
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_brand')}}" class="nav-link active">
                                <i class="fas fa-id-card-alt nav-icon"></i>
                                <p>Danh sách đối tác</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.add_brand')}}" class="nav-link active">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Thêm đối tác</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.list_deliverybrand')}}" class="nav-link bg-info">
                        <i class="fas fa-user-shield"></i>
                        <p>
                            Đối tác giao hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_deliverybrand')}}" class="nav-link active">
                                <i class="fas fa-id-card-alt nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.add_deliverybrand')}}" class="nav-link active">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Thêm đối tác</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.list_slideshow')}}" class="nav-link bg-info">
                        <i class="far fa-image"></i>
                        <p>
                            SlideShow
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_slideshow')}}" class="nav-link active">
                                <i class="far fa-images nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.add_slideshow')}}" class="nav-link active">
                                <i class="far fa-images nav-icon"></i>
                                <p>Thêm slideshow</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link bg-info">
                        <i class="fas fa-tools"></i>
                        <p>
                            Hệ thống
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list_web')}}" class="nav-link active">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>Thông tin chung</p>
                            </a>
                            <a href="{{route('admin.list_about')}}" class="nav-link active">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>Giới thiệu</p>
                            </a>
                            <a href="{{route('logout_admin')}}" class="nav-link active">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>Đăng xuất</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>