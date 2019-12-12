@extends('client/layouts/main')
@section('content')
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="listcart">
            <div class="container">
                <h2>Đơn hàng : {{$order->code_order}}<span></span></h2>
                <div class="row">
                    <div class="col-md-8">
                       @foreach($carts as $cart)
                            <div class="sp" style=" padding-top: 10px;">
                                <input type="hidden" name="cart_id[]" multiple="multiple" value="{{$cart->id}}">
                                <input type="hidden" name="amount[{{$cart->id}}]" multiple="multiple"
                                       id="new_amount">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset($cart->properties->product->picture)}}" width="100%"
                                             alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h3><a href="detail-product.html">{{$cart->properties->product->name}}</a>
                                        </h3>
                                        <p><i class="fas fa-angle-double-right"></i> Giao hàng nhanh</p>
                                        <p>Màu : <a>{{$cart->properties->color->name}}</a></p>
                                        <p>size :<a href="index.html">{{$cart->properties->size}}</a></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="allprice">
                                            Số lượng : <span>{{$cart->amount}}</span>
                                            <br><br>
                                            Giá: <span class="price">
                                                    {{$cart->properties->product->price}} đ </span>
                                            <br>
                                            Tổng tiền: <span class="full-price">
                                                    {{$cart->properties->product->price * $cart->amount}} đ
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
