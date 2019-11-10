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
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Ngưng hợp tác</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Đang hợp tác</a>
        </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th width="200px">Số lượng sản phẩm</th>
        <th>Trạng thái</th>
        <th width="150px"> <a
        href="{{route('admin.add_category')}}" class="btn btn-xs btn-success">
        <i class="fa fa-plus"></i> Thêm mới
        </a></th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach($categorys as $category)
        <tr>
        <td>{{$i++}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->products_count}}</td>
        <td width="200px">
        @if($category->status == 1)
        hợp tác
        @else
        Ngưng hợp tác
        @endif
        </td>
        <td><a href="{{route('admin.edit_category', ['id' => $category->id])}}" class="btn btn-xs btn-info">
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
        <th>Tên danh mục</th>
        <th>Số lượng sản phẩm</th>
        <th></th>
        </tr>
        </tfoot>
        </table>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th width="200px">Số lượng sản phẩm</th>
        <th>Trạng thái</th>
        <th width="150px"> <a
        href="{{route('admin.add_category')}}" class="btn btn-xs btn-success">
        <i class="fa fa-plus"></i> Thêm mới
        </a></th>
        </tr>
        </thead>
        <?php $i = 1 ?>
        <tbody>
        @foreach($categorys0 as $category)
        <tr>
        <td>{{$i++}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->products_count}}</td>
        <td width="200px">
        @if($category->status == 1)
        hợp tác
        @else
        Ngưng hợp tác
        @endif
        </td>
        <td><a href="{{route('admin.edit_category', ['id' => $category->id])}}" class="btn btn-xs btn-info">
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
        <th>Số lượng sản phẩm</th>
        <th> </th>
        </tr>
        </tfoot>
        </table></div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>STT</th>
        <th>Tên đối tác</th>
        <th width="200px">Số lượng sản phẩm</th>
        <th>Trạng thái</th>
        <th width="150px"> <a
        href="{{route('admin.add_category')}}" class="btn btn-xs btn-success">
        <i class="fa fa-plus"></i> Thêm mới
        </a></th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        @foreach($categorys1 as $category)
        <tr>
        <td>{{$i++}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->products_count}}</td>
        <td width="200px">
        @if($category->status == 1)
        hợp tác
        @else
        Ngưng hợp tác
        @endif
        </td>
        <td><a href="{{route('admin.edit_category', ['id' => $category->id])}}" class="btn btn-xs btn-info">
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
        <th>Tên danh mục</th>
        <th>Số lượng sản phẩm</th>
        <th> </th>
        </tr>
        </tfoot>
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

