@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách đơn hàng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách đơn hàng</li>
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
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Chờ xác nhận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Đã xác nhận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Đã từ chối</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-sort="ascending" aria-label="ID: activate to sort column descending">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên khách
                                            hàng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">SĐT
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Địa chỉ
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tổng tiền
                                            phẩm
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ghi chú
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ngày đặt
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($carts as $cart)
                                        @if($cart->status == 1)
                                            <tr role="row" class="odd">
                                                <td>{{$cart->id}}</td>
                                                <td>{{$cart->user->name}}</td>
                                                <td>{{$cart->user->email}}</td>
                                                <td>{{$cart->user->phone}}</td>
                                                <td>{{$cart->user->location}}</td>
                                                <td>{{$cart->properties->product->price * $cart->amount}}</td>
                                                <td>Ship hàng nhanh</td>
                                                <td>{{$cart->created_at}}</td>
                                                <td>
                                                    <a href="/admin1/cart/detail" class="btn btn-xs btn-info">
                                                        <i class="fa fa-pencil"></i> Chi tiết
                                                    </a>
                                                    <a href="{{route('admin.decline', ['id'=> $cart->id])}}" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash"></i> Từ chối
                                                    </a>
                                                    <a href="{{route('admin.accept', ['id'=>$cart->id])}}" class="btn btn-xs btn-success ">
                                                        <i class="fas fa-truck"></i> Xác nhận
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-sort="ascending" aria-label="ID: activate to sort column descending">
                                            ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên khách
                                            hàng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">SĐT
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Địa chỉ
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tổng tiền
                                            phẩm
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ghi chú
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ngày đặt
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($carts as $cart)
                                        @if($cart->status == 2)
                                            <tr role="row" class="odd">
                                                <td>{{$cart->id}}</td>
                                                <td>{{$cart->user->name}}</td>
                                                <td>{{$cart->user->email}}</td>
                                                <td>{{$cart->user->phone}}</td>
                                                <td>{{$cart->user->location}}</td>
                                                <td>{{$cart->properties->product->price * $cart->amount}}</td>
                                                <td>Ship hàng nhanh</td>
                                                <td>{{$cart->created_at}}</td>
                                                <td>
                                                    <a href="/admin1/cart/detail" class="btn btn-xs btn-info">
                                                        <i class="fa fa-pencil"></i> Chi tiết
                                                    </a>
                                                    <a href="{{route('admin.decline', ['id'=> $cart->id])}}" class="btn btn-xs btn-danger">
                                                        <i class="fa fa-trash"></i> Hủy
                                                    </a>
                                                    <a href="{{route('admin.delivery', ['id'=> $cart->user_id]&['created'=> $cart->created_at])}}" class="btn btn-xs btn-success ">
                                                        <i class="fas fa-truck"></i> Giao hàng
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="ID: activate to sort column descending">
                                        ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên khách
                                        hàng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">SĐT
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Địa chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tổng tiền
                                        phẩm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ghi chú
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ngày đặt
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    @if($cart->status == 4)
                                        <tr role="row" class="odd">
                                            <td>{{$cart->id}}</td>
                                            <td>{{$cart->user->name}}</td>
                                            <td>{{$cart->user->email}}</td>
                                            <td>{{$cart->user->phone}}</td>
                                            <td>{{$cart->user->location}}</td>
                                            <td>{{$cart->properties->product->price * $cart->amount}}</td>
                                            <td>Ship hàng nhanh</td>
                                            <td>{{$cart->created_at}}</td>
                                            <td>
                                                <a href="/admin1/cart/detail" class="btn btn-xs btn-info">
                                                    <i class="fa fa-pencil"></i> Chi tiết
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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

