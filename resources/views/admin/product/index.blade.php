@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh mục sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh mục sản phẩm</li>
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
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tất cả</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="pills-enable-tab" data-toggle="pill" href="#pills-enable" role="tab" aria-controls="pills-enable" aria-selected="false">Đang bán</a>
                          </li>
{{--                          <li class="nav-item">--}}
{{--                              <a class="nav-link" id="pills-diactive-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ngừng kinh doanh</a>--}}
{{--                          </li>--}}
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
{{--                                      <th>STT</th>--}}
                                      <th>Tên sản phẩm</th>
                                      <th>Ảnh</th>
                                      <th width="200px">Số lượng</th>
                                      <th>Đường dẫn</th>
                                      <th>Trạng thái</th>
                                      <th width="150px"> <a
                                              href="{{route('admin.add_brand')}}" class="btn btn-xs btn-success">
                                              <i class="fa fa-plus"></i> Thêm mới
                                          </a></th>
                                  </tr>
                                  </thead>
                                   <tbody>
                                  @foreach($products as $product)
                                      <tr>
                                          <td>{{$product->name}}</td>
                                          <td><img src="{{url('/')}}/{{$product->picture}}" height="50px"></td>
                                          <td>{{$product->products_count}}</td>
                                          <td>{{$product->link}}</td>
                                          <td width="200px">
                                              @if($product->status == 1)
                                                  Đan bán
                                              @else
                                                  Ngừng kinh doanh
                                              @endif
                                          </td>
                                          <td><a href="{{route('admin.edit_product')}}" class="btn btn-xs btn-info">
                                                  <i class="fa fa-pencil"></i> Cập nhật
                                              </a>
                                              <a href="#" class="btn btn-xs btn-danger btn-remove">
                                                  <i class="fa fa-trash"></i> Xoá
                                              </a></td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade" id="pills-enable" role="tabpanel" aria-labelledby="pills-enable-tab">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>STT</th>
                                      <th>Tên sản phẩm</th>
                                      <th>Ảnh</th>
                                      <th width="200px">Số lượng</th>
                                      <th>Đường dẫn</th>
                                      <th>Trạng thái</th>
                                      <th width="150px"> <a
                                              href="{{route('admin.add_brand')}}" class="btn btn-xs btn-success">
                                              <i class="fa fa-plus"></i> Thêm mới
                                          </a></th>
                                  </tr>
                                  </thead>
                                   <tbody>
                                  @foreach($activeProducts as $activeProduct)
                                      <tr>
                                          <td>{{$activeProduct->name}}</td>
                                          <td><img src="{{url('/')}}/{{$activeProduct->picture}}" height="50px"></td>
                                          <td>{{$activeProduct->products_count}}</td>
                                          <td>{{$activeProduct->link}}</td>
                                          <td width="200px">
                                              @if($activeProduct->status == 1)
                                                  Đan bán
                                              @else
                                                  Ngừng kinh doanh
                                              @endif
                                          </td>
                                          <td><a href="{{route('admin.edit_brand', ['id' => $activeProduct->id])}}" class="btn btn-xs btn-info">
                                                  <i class="fa fa-pencil"></i> Cập nhật
                                              </a>
                                              <a href="#" class="btn btn-xs btn-danger btn-remove">
                                                  <i class="fa fa-trash"></i> Xoá
                                              </a></td>
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

