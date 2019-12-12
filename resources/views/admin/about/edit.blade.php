@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sửa giới thiệu</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.adminHome')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.list_about')}}">giới thiệu</a></li>
                                <li class="breadcrumb-item active">Sửa giới thiệu</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="{{route('admin.edit_about', ['id' => $about->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Thông tin</b>
                                    <textarea name="info" class="form-control" rows="7" value="{{old('info', $about->info)}}">{{$about->info}}</textarea>
                                    @if($errors->first('info'))
                                    <span class="text-danger">{{$errors->first('info')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b>Nhiệm vụ</b>
                                    <textarea name="mission" class="form-control" rows="7" value="{{old('mission', $about->mission)}}">{{$about->mission}}</textarea>
                                    @if($errors->first('mission'))
                                    <span class="text-danger">{{$errors->first('mission')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>Tầm nhìn</b>
                                    <textarea name="vision" class="form-control" rows="7" value="{{old('vision', $about->vision)}}">{{$about->vision}}</textarea>
                                    @if($errors->first('vision'))
                                    <span class="text-danger">{{$errors->first('vision')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b>Slogan</b>
                                    <textarea name="slogan" class="form-control" rows="7" value="{{old('slogan', $about->slogan)}}">{{$about->slogan}}</textarea>
                                    @if($errors->first('slogan'))
                                    <span class="text-danger">{{$errors->first('slogan')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-left">
                            <a href="{{route('admin.list_about')}}" class="btn  btn-danger">Huỷ</a>
                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>

    
@endsection

