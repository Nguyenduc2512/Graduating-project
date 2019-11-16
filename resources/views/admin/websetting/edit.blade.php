@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sửa thông tin Web</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="setting.html">Websetting</a></li>
                                <li class="breadcrumb-item active">Sửa thông tin Web</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="{{route('admin.edit_web', ['id' => $web->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>SDT</b>
                                    <input type="number" name="hotline" class="form-control" value="{{old('hotline', $web->hotline)}}">
                                    @if($errors->first('hotline'))
                                    <span class="text-danger">{{$errors->first('hotline')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b>Email</b>
                                    <input type="email" name="email" class="form-control" value="{{old('email', $web->email)}}">
                                    @if($errors->first('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b>Địa chỉ</b>
                                    <input type="text" name="address" class="form-control" value="{{old('address', $web->address)}}">
                                    @if($errors->first('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <b>Map</b>
                                    <textarea name="map" class="form-control" rows="7" value="{{old('map', $web->map)}}">{{$web->map}}</textarea>
                                    @if($errors->first('map'))
                                    <span class="text-danger">{{$errors->first('map')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <img name="" id="imageTarget" class="img-responsive" src="{{url('/')}}/{{$web->logo}}" width=" 100%" required="" aria-required="true" height="150px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <b>Logo</b>
                                    <input type="file" id="image" value="" name="logo" class="form-control">
                                    @if($errors->first('logo'))
                                    <span class="text-danger">{{$errors->first('logo')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <img name="" id="imageTarget1" class="img-responsive" src="{{url('/')}}/{{$web->logoblue}}" width=" 100%" required="" aria-required="true" height="150px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <b>Logo blue</b>
                                    <input type="file" id="image1" value="" name="logoblue" class="form-control">
                                    @if($errors->first('logoblue'))
                                    <span class="text-danger">{{$errors->first('logoblue')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-left">
                            <a href="listimg.html" class="btn  btn-danger">Huỷ</a>
                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>

    
@endsection

