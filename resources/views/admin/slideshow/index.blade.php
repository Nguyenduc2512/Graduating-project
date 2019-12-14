@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý slideshow</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.adminHome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý slider</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                @if (session('success'))
                <p style="width: 100%;height: 60px; background:#c1b999;margin-top: 10px;padding-top: 15px;padding-left: 20px;border-radius: 4px"><span class="text-white">{{ session('success') }}</span></p>
                      @endif
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Ảnh
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Đường dẫn liên kết
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Trạng thái
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">
                                            <a href="{{route('admin.add_slideshow')}}" class="btn btn-xs btn-success">
                                                <i class="fa fa-plus"></i> Thêm mới
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    @foreach($slideshows as $slideshow)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><img src="{{url('/')}}/{{$slideshow->picture}}" height="50px"></td>
                                        <td>{{$slideshow->url}}</td>
                                        <td width="200px">
                                            @if($slideshow->status == 1)
                                            Bật
                                            @else
                                            Tắt
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.edit_slideshow', ['id' => $slideshow->id])}}"
                                                class="btn btn-xs btn-info">
                                                <i class="fa fa-pencil"></i> Cập nhật
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
    </section>
    <!-- /.content -->
</div>


@endsection
