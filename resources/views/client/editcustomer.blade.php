@extends('client/layouts/main')
@section('content')
<div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Thông tin của bạn</span>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="margin: auto;">
                    <div class="title">
                        <h2 class="text_title"><span>Thông tin tài khoản</span></h2>
                    </div>
                    <form action="{{ route('member.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                    @if($errors->first('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $profile->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày sinh</label>
                                    <input type="date" class="form-control" name="date_of_birth" value="{{ $profile->date_of_birth }}">
                                    @if($errors->first('date_of_birth'))
                                    <span class="text-danger">{{$errors->first('date_of_birth')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" class="form-control" name="location" value="{{ $profile->location }}">
                                    @if($errors->first('location'))
                                    <span class="text-danger">{{$errors->first('location')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giới tính</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="0" @if($profile->gender == 0)selected @endif>Nam</option>
                                        <option value="1" @if($profile->gender == 1)selected @endif>Nữ</option>
                                        <option value="2" @if($profile->gender == 2)selected @endif>Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="number" name="phone" class="form-control" value="{{ $profile->phone }}">
                                    @if($errors->first('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <img src="{{ url('/') }}/{{ $profile->avatar }}" height="150px" id="imageTarget" class="img-responsive">
                                    <p style="margin-top: 20px" for="">Ảnh đại diện mới</p>
                                    <input type="file" class="form-control" id="image" name="avatar">
                                </div>
                            </div>
                        </div>
                        <div style="margin: auto; width: 100px; margin-bottom: 50px;">
                            <button type="submit" class="btn btn-info">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('msg'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("", "Cập nhật thông tin thành công!", "success");

    </script>

        @endif

@endsection