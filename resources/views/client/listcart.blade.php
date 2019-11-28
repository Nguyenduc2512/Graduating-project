@extends('client/layouts/main')
@section('content')
    <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Giỏ hàng của bạn</span>
        </div>
    </div>

    <div class="listcart">
        <div class="container">
            <h2>Giỏ hàng <span></span></h2>
            <div class="row">
                <div class="col-md-8">
                    <form id="order" action="{{'order'}}" method="post" enctype="multipart/form-data">
                        @csrf
                    @foreach($carts as $cart)
                        @if($cart->status == 0)
                                <input type="hidden" name="cart_id[]" multiple="multiple" value="{{$cart->id}}">
                                <input type="hidden" name="amount[{{$cart->id}}]" multiple="multiple" id="new_amount">
                                <input type="hidden" name="code_promo" id="code_promo">
                                <div class="sp" style=" padding-top: 10px;">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{asset($cart->properties->product->picture)}}" width="100%" alt="">
                                        </div>
                                        <div class="col-md-5">
                                            <h3><a href="detail-product.html">{{$cart->properties->product->name}}</a></h3>
                                            <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                                            <p>Màu : <a>{{$cart->properties->color->name}}</a></p>
                                            <p>size :<a href="index.html">{{$cart->properties->size}}</a></p>
                                            <div class="linkdel">
                                                <a href="{{route('member.remove_item', ['id' => $cart->id])}}">Xóa</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="allprice">
                                                <p href="#" class="qt-minus">-</p>
                                                <p class="qt" multiple="multiple" id="amount">{{$cart->amount}}</p>
                                                <p href="#" class="qt-plus">+</p>
                                                <br><br>
                                                Giá: <span class="price">
                                                        {{$cart->properties->product->price}} đ
                                                </span>
                                                <br>
                                                Tổng tiền: <span class="full-price">
                                                    {{$cart->properties->product->price * $cart->amount}} đ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                    </form>
                </div>
                @if($total_price != 0)
                    <div class="col-md-4">
                        <div id="site-footer">
                            @if (session('msg'))
                                <p  style="color: red">{{ session('msg') }}</p>
                            @endif
                            <form action="{{route('member.promo')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="{{Auth::user()->role}}">
                                <div class="row">
                                    <div class="col-8">
                                        <input type="text" name="code" value="{{session()->get('coupon')['code']}}" placeholder="Nhập mã giảm giá" id="code">

                                    </div>
                                    <div class="col-4">
                                        <button type="submit">Đồng ý</button>
                                    </div>
                                </div>
                            </form>
                            <h2 class="subtotal">Tổng phụ: <span>{{$total_price}} đ</span> đ</h2>
                            <h3 class="km5">Giảm(<span class="km6">{{session()->get('coupon')['down']}}</span>%): -<span class="km7">{{session()->get('coupon')['down'] * $total_price * 0.01}}</span> đ</h3>
                            <h2 class="total">Thành tiền: <span>{{$total_price - session()->get('coupon')['down'] * $total_price * 0.01}}</span> đ</h2>
                            <button class="btn btn-block" onclick="order()">Tiến hành đặt hàng</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <hr>
    <div class="listcart">
        <div class="container">
            <h2>Đã đặt hàng<span></span></h2>
            <div class="row">
                <div class="col-md-8">
                    @foreach($carts as $cart)
                        @if($cart->status == 1)
                            <div class="sp" style=" padding-top: 10px;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset($cart->properties->product->picture)}}" width="100%" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h3><a href="detail-product.html">{{$cart->properties->product->name}}</a></h3>
                                        <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                                        <p>Màu : <a>{{$cart->properties->color->name}}</a></p>
                                        <p>size :<a href="index.html">{{$cart->properties->size}}</a></p>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_item', ['id' => $cart->id])}}">Xóa</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="allprice">
                                            Số lượng : <span>{{$cart->amount}}</span>
                                            <br><br>
                                            Giá: <span class="price">
                                        {{$cart->properties->product->price}} đ
                                    </span>
                                            <br>
                                            Tổng tiền: <span class="full-price">
                                        {{$cart->properties->product->price * $cart->amount}} đ
                                    </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function order() {
        var code = document.getElementById('code').value;
        document.getElementById('code_promo').value = code;
        var b = document.getElementById('amount').textContent;
        document.getElementById('new_amount').value = b;
        document.getElementById('order').submit();
    }
</script>
