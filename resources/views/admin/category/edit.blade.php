@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sửa danh mục</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sửa danh mục</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="col-md-8">
          <form action="{{ route('admin.edit_category', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{ $category->id }}">
              <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                @if($errors->first('name'))
                  <span class="text-danger">{{$errors->first('name')}}</span>
                @endif 
              </div>
              <div class="form-group">
                  <b>Mô tả</b>
                  <input type="text" name="description" class="form-control" value="{{ $category->description }}">
                    @if($errors->first('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>
                  @endif 
                </div>
              <label>
                @if($category->status == 1)
                  <input type="radio" checked name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="radio"  name="status" value="0"> Ngưng hoạt động
                @else
                  <input type="radio"  name="status" value="1"> Hoạt động&nbsp;&nbsp;&nbsp;&nbsp;                    
                  <input type="radio" checked  name="status" value="0"> Ngưng hoạt động
                @endif
              </label>
              <div class="text-center">
                <a href="{{ route('admin.list_category') }}" class="btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

