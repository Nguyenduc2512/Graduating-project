@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Thêm sản phẩm</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <b>Tên sản phẩm</b>
                  <input type="text" name="product_name" class="form-control">
                </div>
                <div class="form-group">
                  <b>Danh mục</b>
                  <select name="cate_id" class="form-control">
                    <option value="3">Danh mục 1</option>
                    <option value="4">Danh mục 2</option>
                    <option value="5">Danh mục 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <b>Giá bán</b>
                  <input type="text" name="list_price" class="form-control" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <b>Giá khuyến mại</b>
                  <input type="text" name="sell_price" class="form-control" required="" aria-required="true">
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <img name="" id="" src="{{asset('/admin/dist/img/photo1.png')}}" width="100%" required="" aria-required="true">
                  </div>
                </div>
                <div class="form-group">
                  <b>Ảnh sản phẩm</b>
                  <input type="file" id="product_image" name="image" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <b>Mô tả</b>
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="col-md-12 text-left">
              <a href="listproduct.html" class="btn  btn-danger">Huỷ</a>
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>

    
@endsection

