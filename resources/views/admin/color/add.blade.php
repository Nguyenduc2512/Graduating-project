@extends('admin/layouts/main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm màu sắc</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thêm màu sắc</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.add_color')}}" method="post" enctype="multipart/form-data" name="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>màu</b>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                @if($errors->first('name'))
                                    <span class="text-danger"> {{$errors->first('name')}} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-left">
                        <a href="" class="btn  btn-danger">Huỷ</a>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
