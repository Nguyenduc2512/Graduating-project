@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách phản hồi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách phản hồi</li>
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
                    @if (session('msg'))
                    <p class="mb-0" style="color: red">{{ session('msg') }}</p>
                    @endif
                    <div class="row">
                        <div class="col-sm-12 col-md-3 form-group"></div>
                        <div class="col-sm-12 col-md-9 form-group"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Nội dung</th>
                                        <th width="250px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>

                                    @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td width="200px">{{$comment->user->name}}</td>
                                        <td width="200px">{{$comment->product->name}}</td>
                                        <td width="600px">{{$comment->content}}</td>
                                        <td>
                                            <a href="{{route('admin.reply_comment', ['id' => $comment->id])}}"
                                                class="btn btn-xs btn-info">
                                                <i class="fa fa-pencil"></i>Danh sách trả lời
                                            </a>
                                            <a href="javascript:;"
                                                linkurl="{{route('admin.remove_comment', ['id' => $comment->id])}}"
                                                class="btn btn-xs btn-danger btn-remove"> <i class="fa fa-trash"></i>
                                                Xóa </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Nội dung</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection