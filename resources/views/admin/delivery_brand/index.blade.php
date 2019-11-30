@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách đối tác</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách đối tác</li>
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
                    <table id="example" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên đối tác</th>
                                <th>Đường dẫn</th>
                                <th>Email</th>
                                <th>Trạng thái</th>
                                <th width="150px"> <a href="{{route('admin.add_deliverybrand')}}"
                                        class="btn btn-xs btn-success">
                                        <i class="fa fa-plus"></i> Thêm mới
                                    </a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach($listdeliverybrand as $deliverybrand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$deliverybrand->name}}</td>
                                <td>{{$deliverybrand->email}}</td>
                                <td>{{$deliverybrand->link}}</td>
                                <td width="200px">
                                    @if($deliverybrand->status == 1)
                                    Hợp tác
                                    @else
                                    Ngưng hợp tác
                                    @endif
                                </td>
                                <td><a href="{{route('admin.edit_deliverybrand', ['id' => $deliverybrand->id])}}"
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
                                <th>Email</th>
                                <th>Đường dẫn</th>
                                <th>Trạng thái</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection