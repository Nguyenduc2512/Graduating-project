@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách khách hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách khách hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @if (session('success'))
                            <p class="text-danger"> {{session('success')}} </p>
                            @endif
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên quản trị</th>
                                        <th>Email</th>
                                        <th width="200px">Ảnh đại diện</th>
                                        <th width="150px"> <a href="" class="btn btn-xs btn-success">
                                                <i class="fa fa-plus"></i> Thêm mới
                                            </a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($admins as $admin)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td><img src="{{url('/')}}/{{$admin->avatar}}" width="200px"></td>
                                        <td><a href="{{route('admin.edit_admin', ['id' => $admin->id])}}"
                                                class="btn btn-xs btn-info">
                                                <i class="fa fa-pencil"></i> Cập nhật
                                            </a>
                                            <a href="#" class="btn btn-xs btn-danger btn-remove">
                                                <i class="fa fa-trash"></i> Xoá
                                            </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên đối tác</th>
                                        <th>Logo</th>
                                        <th>Số lượng sản phẩm</th>
                                        <th>Đường dẫn</th>
                                        <th> </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous"><a
                                            href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                            data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                            data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                            aria-controls="example2" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection