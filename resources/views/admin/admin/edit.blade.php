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
            <form action="{{route('admin.edit_admin', ['id' => $admin->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$admin->id}}" value="1">
              <div class="form-group">
                <label>Tên đối tác</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $admin->name)}}">
                @if($errors->first('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{old('email', $admin->email)}}">
                @if($errors->first('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
              </div>
              <div class="form-group">
                <label>Avatar</label> <br>
                <img id="imageTarget" src="{{url('/')}}/{{$admin->avatar}}" height="100px" class="img-responsive">
                <input type="file" id="image" name="avatar" value="" class="form-control">
                @if($errors->first('avatar'))
                <span class="text-danger">{{$errors->first('avatar')}}</span>
                @endif
              </div>
              <div class="text-center">
                <a href="{{route('admin.list_admin')}}" class=" btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

