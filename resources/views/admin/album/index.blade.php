@extends('admin/layouts/main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Album sản phẩm {{$product->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Album Ảnh</li>
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
                                            <th>Ảnh </th>
                                            <th width="150px"> <a href="{{route('admin.new_picture', ['id' => $product->id])}}"
                                                                  class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($album as $picture)
                                            <tr>
                                                <td><img src="/{{$picture->picture}}"></td>
                                                <td>
                                                    <a href="{{route('admin.remove_picture', ['id' => $picture->id])}}" class="btn btn-xs btn-danger btn-remove">
                                                        <i class="fa fa-trash"></i> Xoá
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <form action="{{route('admin.new_picture', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="picture[]" multiple>
                                        <button type="submit">Thêm ảnh</button>
                                    </form>
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
