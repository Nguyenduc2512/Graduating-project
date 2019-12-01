@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Thông tin đặt hàng</span>
        </div>
    </div>

    <div class="order">
        <div class="container">
            <form action="{{route('member.new_order')}}" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6" style="border-right: 1px solid #ddd ;">
                        <div class="title">
                            <h2 class="text_title"><span>Thông tin liên hệ giao hàng</span></h2>
                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên *</label>
                            <input type="text" class="form-control" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại *</label>
                            <input type="number" class="form-control" value="{{Auth::user()->phone}}">
                        </div>
                        <div class="title">
                            <h2 class="text_title"><span>Địa chỉ giao hàng</span></h2>
                        </div>
                        <div class="form-group">
                            <label for="">Quận Huyện(Hà Nội) *</label>
                            <select name="" id="" class="form-control">
                                <option value="">Cầu giấy</option>
                                <option value="">Nam Từ Liêm</option>
                                <option value="">Cầu giấy</option>
                                <option value="">Cầu giấy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ  *</label>
                            <input type="text" class="form-control" value="{{Auth::user()->location}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ghi chú *</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="title">
                            <h2 class="text_title"><span>Giỏ hàng của bạn</span></h2>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Hình</th>
                                <th>Thông tin sản phẩm </th>
                                <th>SL</th>
                                <th>Đơn giá</th>
                                <th>Xóa</th>
                            </tr>
                            <tr>
                                <td><img src="/{{$properties->product->picture}}" height="50px" alt=""></td>
                                <td>Tên sản phẩm : {{$properties->product->name}} <p>Màu : {{$properties->color->name}}</p>
                                       <p>Size : {{$properties->size}}</p>
                                </td>
                                <td><input class="form-control quantity input-sm" option="1" cart="" rel="" name="amount"
                                           style="width:60px; text-align:center;padding-right:0px; " value="{{$amount}}"
                                           type="number" min="1"></td>
                                <td>{{$properties->product->price}} đ</td>
                                <td><a class="del" href="#">Xóa</a></td>
                            </tr>
                            </tbody>
                        </table>
                        @if (session('msg'))
                            <p  style="color: red">{{ session('msg') }}</p>
                        @endif
                        <form action="{{route('member.promo')}}" method="post" enctype="multipart/form-data" id="promo">
                            @csrf
                            <input type="hidden" name="role" value="{{Auth::user()->role}}">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" name="code" value="{{session()->get('coupon')['code']}}" placeholder="Nhập mã giảm giá" id="code">
                                </div>
                                <div class="col-4">
                                    <a href="" class="del" onclick="promo()">Đồng ý</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" name="properties_id" value="{{$properties->id}}">
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="promo">
                    <input name="total_price" value="{{$properties->product->price * $amount}}" type="hidden">
                    <div class="col-lg-12" style="text-align: center;
                         padding-bottom: 50px; margin-top: 20px;">
                        <button type="submit" class="btn btn-danger">Gửi đơn hàng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
