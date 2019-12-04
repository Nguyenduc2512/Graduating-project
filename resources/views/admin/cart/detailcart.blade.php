@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Chi tiết đơn hàng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="listorder.html">Danh sách đơn hàng</a></li>
                <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ảnh</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Sản phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Số lượng
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Giá/1 sản
                          phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Thành tiền
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"> <a
                            href="{{route('admin.list_cart')}}" class="btn btn-xs btn-success">
                            <i class="fas fa-long-arrow-alt-left"></i> Quay lại
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $cart)
                        <tr role="row" class="odd">
                            <td><img src="/{{$cart->properties->product->picture}}" style="width: 100px"></td>
                              <td>{{$cart->properties->product->name}}</td>
                              <td>{{$cart->amount}}</td>
                              <td>{{$cart->properties->product->price}}</td>
                              <td>{{$cart->properties->product->price * $cart->amount}}</td>
                        <td></td>
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

