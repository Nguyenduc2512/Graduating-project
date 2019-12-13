@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm mã giảm giá</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mã giảm giá</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form enctype="" method="post" action="{{route('admin.add_promo')}}" id="" novalidate="novalidate">
            @csrf
            <input type="hidden" name="admin_id" value="{{Auth::guard('admins')->user()->id}}">
            <div class="col-md-9">
              <div class="form-group">
                <b>Mã giảm giá</b>
                <input type="text" name="code" class="form-control" placeholder="Mã giảm giá tự động" disabled>
              </div>
            </div>
            <div class="col-md-9" center="">
              <div class="form-group">
                <b>Chiếu khấu(%)</b>
                <input type="number" name="down" value="{{old('down')}}" class="form-control" required="" aria-required="true">
                @if($errors->first('down'))
                <span class="text-danger">{{$errors->first('down')}}</span>
                @endif
              </div>
              <div class="form-group">
                <b>Ngày bắt đầu</b>
                <input type="date" name="start_time" value="{{old('start_time')}}" class="form-control" required="" aria-required="true">
                @if($errors->first('start_time'))
                <span class="text-danger">{{$errors->first('start_time')}}</span>
                @endif
              </div>
              <div class="form-group">
                <b>Ngày kết thúc</b>
                <input type="date" name="end_time" value="{{old('end_time')}}" class="form-control" required="" aria-required="true">
                @if($errors->first('end_time'))
                <span class="text-danger">{{$errors->first('end_time')}}</span>
                @endif
              </div>
              <div class="form-group">
                <b>Số lượng</b>
                <input type="number" name="amount" value="{{old('amount')}}" class="form-control" required="" aria-required="true">
                @if($errors->first('amount'))
                <span class="text-danger">{{$errors->first('amount')}}</span>
                @endif
              </div>
              <div class="form-group">
                <b>Đôi tượng</b>
                <select name="role" class="form-control" aria-required="true">
                  <option value="100">Tất cả</option>
                  <option value="200">Bạc</option>
                  <option value="300">Vàng</option>
                  <option value="400">Bạch kim</option>
                </select>
              </div>
              <div class="text-center">
                <a href="listcode.html" class="btn btn-danger btn-xs">Huỷ</a>
                <button type="submit" class="btn btn-primary btn-xs" value="upload">Tạo mới</button>
              </div>

            </div>
          </form>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>


@endsection

