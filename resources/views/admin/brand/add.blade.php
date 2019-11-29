@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm đối tác</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm đối tác</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form method="post" action="{{route('admin.add_brand')}}" id="" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <img name="picture" id="imageTarget" class="img-responsive" src="{{asset('/admin/dist/img/photo1.png')}}" width="100%" required="" aria-required="true">
                  @if($errors->first('down'))
                <span class="text-danger">{{$errors->first('down')}}</span>
                @endif
                </div>
              </div>
              <div class="form-group">
                <b>Ảnh đối tác</b>
                <input type="file" id="image" name="logo" class="form-control">
                @if($errors->first('logo'))
                <span class="text-danger">{{$errors->first('logo')}}</span>
                @endif
              </div>
            </div>
            <div class="col-md-9" center="">
              <div class="form-group">
                <b>Tên Đối Tác</b>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" required="" aria-required="true">
                @if($errors->first('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
              </div>
              <div class="form-group">
                <b>Đường liên kết</b>
                <input type="text" name="link" value="{{old('link')}}" class="form-control" required="" aria-required="true">
                @if($errors->first('link'))
                <span class="text-danger">{{$errors->first('link')}}</span>
                @endif
              </div>
              <input type="hidden" value="1" name="status">
              <div class="text-center">
                <a href="{{route('admin.list_brand')}}" class="btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs" value="upload">Tạo mới</button>
              </div>

            </div>
          </form>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

