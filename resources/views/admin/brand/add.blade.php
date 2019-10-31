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
          <form enctype="" method="post" action="" id="" novalidate="novalidate">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <img id="imageTarget" src="../../dist/img/avatar2.png" class="img-responsive" required=""
                    aria-required="true">
                </div>
              </div>
              <div class="form-group">
                <b>Ảnh đối tác</b>
                <input type="file" id="brand_image" name="image" class="form-control">
              </div>
            </div>
            <div class="col-md-9" center="">
              <div class="form-group">
                <b>Tên Đối Tác</b>
                <input type="text" name="name" class="form-control" required="" aria-required="true">
              </div>
              <div class="form-group">
                <b>Đường liên kết</b>
                <input type="text" name="name" class="form-control" required="" aria-required="true">
              </div>
              <div class="text-center">
                <a href="listbrand.html" class="btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs" value="upload">Tạo mới</button>
              </div>

            </div>
          </form>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

