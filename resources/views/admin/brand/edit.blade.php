@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sửa đối tác</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sửa đối tác</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="col-md-8">
            <form action="{{route('admin.edit_brand', ['id' => $brand->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$brand->id}}" value="1">
              <div class="form-group">
                <label>Tên đối tác</label>
                <input type="text" name="name" class="form-control" value="{{$brand->name}}">
              </div>
              <div class="form-group">
                <label>Đường dẫn</label>
                <input type="text" name="link" class="form-control" value="{{$brand->link}}">
              </div>
              <div class="form-group">
                <label>Ảnh đối tác</label> <br>
                <img id="imageTarget" src="{{url('/')}}/{{$brand->logo}}" height="100px" class="img-responsive">
                <input type="file" id="image" name="logo" value="" class="form-control">
              </div>
              <label>
                @if($brand->status == 1)
                  <input type="radio" checked name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="radio"  name="status" value="0"> Ngưng hoạt động
                @else
                  <input type="radio"  name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp;                    
                  <input type="radio" checked  name="status" value="0"> Ngưng hoạt động
                @endif
              </label>
              <div class="text-center">
                <a href="{{route('admin.list_brand')}}" class=" btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

