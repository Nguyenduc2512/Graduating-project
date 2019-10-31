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
            <form action="#" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="1">
              <div class="form-group">
                <label>Tên đối tác</label>
                <input type="text" name="name" class="form-control" value="Tên đối tác">
              </div>
              <div class="form-group">
                <label>Đường dẫn</label>
                <input type="text" name="name" class="form-control" value="doitac.com.vn">
              </div>
              <div class="form-group">
                <label>Ảnh đối tác</label> <br>
                <input type="hidden" name="old_filename" value="">
                <img id="imageTarget" src="../../dist/img/avatar2.png" class="img-responsive">
                <input type="file" id="product_image" name="image" class="form-control">
              </div>
              <div class="text-center">
                <a href="listbrand.html" class=" btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

