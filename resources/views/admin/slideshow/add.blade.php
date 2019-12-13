@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm sliider</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.adminHome')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.list_slideshow')}}">Quản lý slider</a></li>
                        <li class="breadcrumb-item active">Thêm slider</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{route('admin.add_slideshow')}}" id="" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <img name="picture" id="imageTarget" class="img-responsive" src="{{asset('/admin/dist/img/photo1.png')}}" width="100%" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <b>Ảnh slideshow</b>
                        <input type="file" id="image" name="picture" class="form-control">
                        @if($errors->first('picture'))
                        <span class="text-danger"> {{$errors->first('picture')}} </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-9" center="">
                    <div class="form-group">
                        <b>Đường dẫn liên kết</b>
                        <input type="text" name="url" class="form-control" required="" aria-required="true" value="{{old('url')}}">
                        @if($errors->first('url'))
                        <span class="text-danger"> {{$errors->first('url')}} </span>
                        @endif
                    </div>
                    <input type="hidden" value="1" name="status">
                    <div class="text-center">
                        <a href="{{route('admin.list_slideshow')}}" class="btn btn-danger btn-xs">Huỷ</a>
                        <button type="submit" class="btn btn-primary btn-xs" value="upload">Tạo mới</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection