@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa slideshow</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sửa slideshow</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-8">
                <form action="{{route('admin.edit_slideshow', ['id' => $listslideshow->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$listslideshow->id}}">
                    <div class="form-group">
                        <label>Ảnh slideshow</label> <br>
                        <img id="imageTarget" src="{{url('/')}}/{{$listslideshow->picture}}" height="100px" class="img-responsive">
                        <input type="file" id="image" name="picture" value="" class="form-control">
                        @if($errors->first('picture'))
                        <span class="text-danger"> {{$errors->first('picture')}} </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Đường dẫn liên kết</label>
                        <input type="text" name="url" class="form-control" value="{{$listslideshow->url}}">
                        @if($errors->first('url'))
                        <span class="text-danger"> {{$errors->first('url')}} </span>
                        @endif
                    </div>
                    <label>
                        @if($listslideshow->status == 1)
                        <input type="radio" checked name="status" value="1"> Bật&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="status" value="0"> Tắt
                        @else
                        <input type="radio" name="status" value="1"> Bật&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" checked name="status" value="0"> Tắt
                        @endif
                    </label>
                    <div class="text-center">
                        <a href="{{route('admin.list_slideshow')}}" class=" btn btn-danger btn-xs">Huỷ</a>
                        <button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection