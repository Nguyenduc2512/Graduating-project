@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Liên hệ</span>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                    @if (session('msg'))
                    <p class="mb-0">{{ session('msg') }}</p>
                    @endif
                        <h2 class="text_title"><span>Gửi liên hệ về Auth Shose</span></h2>
                    </div>
                    <form action="{{route('contact')}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nhập họ tên">
                                    @if($errors->first('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email của bạn">
                                    @if($errors->first('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Điện thoại">
                                    @if($errors->first('phone'))
                                    <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">--Chọn chủ đề liên hệ--</option>
                                        <option value="">Cần tư vấn mua hàng</option>
                                        <option value="">Hỏi về tình trang đơn hàng</option>
                                        <option value="">Phàn nàn dịch vụ</option>
                                        <option value="">Bạn muốn làm đối tác</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="content" id="" cols="30" rows="4" class="form-control"
                                        placeholder="Nội dung liên hệ">{{old('content')}}</textarea>
                                    @if($errors->first('content'))
                                    <span class="text-danger">{{$errors->first('content')}}</span>
                                    @endif    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info" data-dismiss="modal">Gửi liên hệ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="title">
                        <h2 class="text_title"><span>Thông tin liên hệ</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="pull-left fa fa-home"></i> <strong>Trụ sở chính:</strong> <br>
                                {{$webs->address}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="pull-left fa fa-phone"></i> <strong>Điện thoại:</strong> <br>
                                {{$webs->hotline}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="margin-bottom: 20px;">
                                <i class="far fa-envelope"></i> <strong>Email:</strong> <br>
                                {{$webs->email}}
                            </div>
                            <p style="font-size: 14px;">Website www.authshose.com là website chuyên bán các dòng sản
                                phẩm về giày với các thương
                                hiệu
                                lớn: Nike, Gucci, Addidas, Convers,...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="map">
                <div class="col-lg-6" style="margin: auto;">
                    <div class="title">
                        <h2 class="text_title"><span>Bản đồ đến với Auth Shose</span></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <iframe
                        src="{{$webs->map}}"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection