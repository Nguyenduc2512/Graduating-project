@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Sửa mã giảm giá</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sửa mã giảm giá</li>
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
                <label>Mã giảm giá</label>
                <input type="number" name="name" class="form-control" value="23442">
              </div>
              <div class="form-group">
                <b>Chiếu khấu</b>
                <input type="text" name="name" class="form-control" value="2%">
              </div>
              <div class="text-center">
                <a href="listcode.html" class=" btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
              </div>
            </form>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    
@endsection

