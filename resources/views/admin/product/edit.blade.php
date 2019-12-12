@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sửa sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sửa sản phẩm</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="col-md-12">
            <form action="{{route('admin.edit_product', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <b>Tên sản phẩm</b>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                  </div>
                  <div class="form-group">
                    <b>Danh mục</b>
                    <select name="cate_id" class="form-control">
                        <option>{{$product->category->name}}</option>
                      @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <b>Giá bán</b>
                    <input type="text" name="price" class="form-control" required="" aria-required="true"
                      value="{{$product->price}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <img name="picture" id="" src="/{{$product->picture}}" width="100%" required="" aria-required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <b>Ảnh sản phẩm</b>
                    <input type="file" id="product_image" name="picture" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <b>Mô tả</b>
                <textarea class="form-control" rows="3" name="description">{{$product->description}}</textarea>
              </div>
              <div class="col-md-12 text-left">
                <a href="{{route('admin.show_product')}}" class="btn  btn-danger">Huỷ</a>
                <button type="submit" class="btn btn-primary">Thay đổi</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

@endsection

