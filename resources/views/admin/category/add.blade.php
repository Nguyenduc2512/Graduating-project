@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm danh mục</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm danh mục</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="col-8">
            <form method="post" action="{{ route('admin.add_category') }}"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <b>Tên danh mục</b>
                <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                @if($errors->first('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
              </div>
              <div class="form-group">
                  <b>Mô tả</b>
                  <input type="text" name="description" value="{{old('description')}}" class="form-control">
                  @if($errors->first('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>
                  @endif 
                </div>
                <input type="hidden" value="1" name="status">
              <div class="text-center">
                <a href="{{ route('admin.list_category') }}" class="btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Tạo mới</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

