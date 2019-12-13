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
            <li class="breadcrumb-item"><a href="{{route('admin.adminHome')}}">Home</a></li>
            <li class="breadcrumb-item active">Sửa đối tác giao hàng</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="col-md-8">
        <form action="{{route('admin.edit_deliverybrand', ['id' => $listdeliverybrand->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$listdeliverybrand->id}}" value="1">
          <div class="form-group">
            <label>Tên đối tác</label>
            <input type="text" name="name" class="form-control" value="{{old('name', $listdeliverybrand->name)}}" >
            @if($errors->first('name'))
            <span class="text-danger"> {{$errors->first('name')}} </span>
            @endif
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email', $listdeliverybrand->email)}}">
            @if($errors->first('email'))
            <span class="text-danger"> {{$errors->first('email')}} </span>
            @endif
          </div>
          <div class="form-group">
            <label>Đường liên kết</label>
            <input type="text" name="link" class="form-control" value="{{old('link', $listdeliverybrand->link)}}">
            @if($errors->first('link'))
            <span class="text-danger"> {{$errors->first('link')}} </span>
            @endif
          </div>
          <label>
            @if($listdeliverybrand->status == 1)
            <input type="radio" checked name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status" value="0"> Ngưng hoạt động
            @else
            <input type="radio" name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" checked name="status" value="0"> Ngưng hoạt động
            @endif
          </label>
          <div class="text-center">
            <a href="{{route('admin.list_deliverybrand')}}" class=" btn btn-danger btn-xs">Huỷ</a>
            <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
          </div>
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection