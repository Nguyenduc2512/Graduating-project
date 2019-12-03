@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách mã giảm giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách mã giảm giá</li>
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
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Tất cả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">khách hàng bạc</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Khách hàng vàng</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1 ?>
                                        @foreach($promos as $promo)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$promo->code}}</td>
                                            <td>{{$promo->down}}%</td>
                                            <td>{{$promo->admin->name}}</td>
                                            <td>{{$promo->start_time}}</td>
                                            <td>{{$promo->end_time}}</td>
                                            <td width="200px">
                                                @if($promo->role == 1)
                                                Tất cả
                                                @elseif($promo->role == 2)
                                                Bạc
                                                @else
                                                Vàng
                                                @endif
                                            </td>
                                            <td>
                                                @if($promo->amount == 0)
                                                hết
                                                @else
                                                {{$promo->amount}}
                                                @endif
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1 ?>
                                        @foreach($promos2 as $promo)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$promo->code}}</td>
                                            <td>{{$promo->down}}%</td>
                                            <td>{{$promo->admin->name}}</td>
                                            <td>{{$promo->start_time}}</td>
                                            <td>{{$promo->end_time}}</td>
                                            <td width="200px">
                                                @if($promo->role == 1)
                                                Tất cả
                                                @elseif($promo->role == 2)
                                                Bạc
                                                @else
                                                Vàng
                                                @endif
                                            </td>
                                            <td>
                                                @if($promo->amount == 0)
                                                hết
                                                @else
                                                {{$promo->amount}}
                                                @endif
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1 ?>
                                        @foreach($promos3 as $promo)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$promo->code}}</td>
                                            <td>{{$promo->down}}%</td>
                                            <td>{{$promo->admin->name}}</td>
                                            <td>{{$promo->start_time}}</td>
                                            <td>{{$promo->end_time}}</td>
                                            <td width="200px">
                                                @if($promo->role == 1)
                                                Tất cả
                                                @elseif($promo->role == 2)
                                                Bạc
                                                @else
                                                Vàng
                                                @endif
                                            </td>
                                            <td>
                                                @if($promo->amount == 0)
                                                hết
                                                @else
                                                {{$promo->amount}}
                                                @endif
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th width="120px">Mã giảm giá</th>
                                            <th width="120px">Mức giảm giá</th>
                                            <th width="150px">Tên quản trị</th>
                                            <th width="150px">Ngày bắt đầu</th>
                                            <th width="150px">Ngày kết thúc</th>
                                            <th width="150px">Đối tượng giảm giả</th>
                                            <th width="200px">Số lượng mã giảm giá</th>
                                            <th width="100px"> <a href="{{route('admin.add_promo')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
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