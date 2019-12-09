@extends('admin/layouts/main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Màu sắc</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Màu sắc</li>
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
                        <div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Màu</th>
                                            <th width="150px"> <a href="{{route('admin.add_color')}}"
                                                                  class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($colors as $color)
                                            <tr>
                                                <td>{{$color->name}}</td>
                                                <td>
                                                    <a href="{{route('admin.edit_color', ['id' => $color->id])}}" class="btn btn-xs btn-info">
                                                        <i class="fa fa-pencil"></i> Cập nhật
                                                    </a>
                                                    <a href="{{route('admin.disable_color', ['id' => $color->id])}}" class="btn btn-xs btn-danger btn-remove">
                                                        <i class="fa fa-trash"></i> Xoá
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
