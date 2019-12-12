@extends('admin/layouts/main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách đơn hàng đang vận chuyển</h1>
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
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-hover dataTable" role="grid"
                                               aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="ID: activate to sort column descending">
                                                    ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Tên khách
                                                    hàng
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">SĐT
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Địa chỉ
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Tổng tiền
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Mã Giảm Giá
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1">Ngày đặt
                                                </th>
                                                <th>Đơn vị giao hàng</th>
                                                <th>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                    <tr role="row" class="odd">
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->user->name}}</td>
                                                        <td>{{$order->user->email}}</td>
                                                        <td>{{$order->user->phone}}</td>
                                                        <td>{{$order->location}}</td>
                                                        <td>{{$order->total_price}}</td>
                                                        <td>
                                                            @if( $order->promo != null)
                                                                {{$order->promo}}
                                                            @else
                                                                #Không có
                                                            @endif
                                                        </td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>{{$order->brand->name}}</td>
                                                        <td>
                                                            <a href="{{route('admin.detail_cart', ['id' => $order->id])}}" class="btn btn-xs btn-info">
                                                                <i class="fa fa-pencil"></i> Chi tiết
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
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection
