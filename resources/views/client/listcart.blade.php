@extends('client/layouts/main')
@section('content')
<div class="path_link">
    <div class="container">
        <a href="index.html">Trang chủ</a> > <span>Giỏ hàng của bạn</span>
    </div>
</div>
<div class="tab_cart">
    <div class="container" style="margin-top: 50px;" id="tabs">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item"
                style="border: #0000ff 1px solid; width: 150px; border-radius: 3px; text-align: center">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Giỏ hàng</a>
            </li>
            <br>
            <li class="nav-item"
                style="border: #0000ff 1px solid; width: 150px; border-radius: 3px; text-align: center">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Đã đặt hàng</a>
            </li>
            <br>
            <li class="nav-item"
                style="border: #0000ff 1px solid; width: 150px; border-radius: 3px; text-align: center">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Đang vận chuyển</a>
            </li>
            <br>
            <li class="nav-item"
                style="border: #0000ff 1px solid; width: 150px; border-radius: 3px; text-align: center">
                <a class="nav-link" id="pills_history_tab" data-toggle="pill" href="#pills-history" role="tab"
                    aria-controls="pills-history" aria-selected="false">Lịch sử</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="listcart">
                <div class="container">
                    <h2>Giỏ hàng <span></span></h2>
                    <div class="row">
                        <div class="col-md-8">
                            <form id="order" action="{{'order'}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="location" id="location">
                                <input type="hidden" name="code_promo" id="code_promo">
                                <input type="hidden" name="total_price" id="total_price">
                                @foreach($carts as $cart)
                                @if($cart->status == 0)
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
                                            <div class="linkdel">
                                                <a href="javascript:;"
                                                linkurl="{{route('member.remove_item', ['id' => $cart->id])}}"
                                                class="btn btn-xs btn-danger btn-remove"> <i class="fa fa-trash"></i>
                                                Xóa </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="allprice">
                                                <span href="#" class="qt-minus">-</span>
                                                <span class="qt" multiple="multiple"
                                                    id="amount">{{$cart->amount}}</span>
                                                <span href="#" class="qt-plus">+</span>
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
                                @endif
                                @endforeach
                            </form>
                        </div>
                        @if($all_price != 0)
                        <div class="col-md-4">
                            <div id="site-footer">
                                @if (session('msg'))
                                <p style="color: red">{{ session('msg') }}</p>
                                @endif
                                <form action="{{route('member.promo')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="role" value="{{Auth::user()->role}}">
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" name="code" value="{{session()->get('coupon')['code']}}"
                                                placeholder="Nhập mã giảm giá" id="code">
                                        </div>
                                        <div class="col-4">
                                            <button type="submit">Đồng ý</button>
                                        </div>
                                    </div>
                                </form>
                                <h2 class="subtotal">Tổng phụ: <span>{{$all_price}}</span> đ</h2>
                                <h3 class="km5">Giảm(<span class="km6">{{session()->get('coupon')['down']}}</span>%):
                                    -<span class="km7">{{session()->get('coupon')['down'] * $all_price * 0.01}}</span>
                                    đ</h3>
                                <h2 class="total">Thành tiền:
                                    <span>{{$all_price - session()->get('coupon')['down'] * $all_price * 0.01}}</span>
                                    đ</h2>
                                <button class="btn btn-block" onclick="order()">Tiến hành đặt hàng</button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="listcart">
                <div class="container">
                    <h2>Đã đặt hàng<span></span></h2>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($orders as $order)
                            @if($order->status == 1)
                            <div class="sp" style=" padding-top: 10px;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h3>Đơn : <a href="{{route('member.order_detail', ['id'=> $order->id])}}">{{$order->code_order}}</a></h3>
                                        <p><i class="fas fa-angle-double-right"></i> Giao hàng tại :
                                            {{$order->location}}</p>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_order', ['id' => $order->id])}}">Hủy đơn hàng</a>
                                        </div>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_order', ['id' => $order->id])}}">Xem Chi
                                                Tiết</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="allprice">
                                            <br><br>
                                            Tổng tiền: <span class="full-price">{{$order->total_price}} đ</span>

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
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="listcart">
                <div class="container">
                    <h2>Đang vận chuyển<span></span></h2>
                    <div class="row">
                        <div class="col-md-8">
                            @foreach($orders as $order)
                            @if($order->status == 4)
                            <div class="sp" style=" padding-top: 10px;">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-5">
                                        <h3>Đơn : <a href="">{{$order->code_order}}</a></h3>
                                        <p><i class="fas fa-angle-double-right"></i> Giao hàng tại nhà</p>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_order', ['id' => $order->id])}}">Xem Chi
                                                Tiết</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="allprice">
                                            Số lượng : <span>{{count($orders)}}</span>
                                            <br><br>
                                            Tổng tiền: <span class="full-price">{{$order->total_price}} đ</span>

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
        </div>
        <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills_history_tab">
            <div class="listcart">
                <div class="container">
                    <h2>Lịch sử <span></span></h2>
                    <div class="row">
                        <div class="col-md-8">
                            @foreach($orders as $order)
                            @if($order->status > 4 && $order->status < 7)
                            <div class="sp" style=" padding-top: 10px;">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-5">
                                        <h3>Đơn : <a href="">{{$order->code_order}}</a></h3>
                                        <p><i class="fas fa-angle-double-right"></i> Giao hàng tại nhà</p>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_order', ['id' => $order->id])}}">Xóa</a>
                                        </div>
                                        <div class="linkdel">
                                            <a href="{{route('member.remove_order', ['id' => $order->id])}}">Xem Chi
                                                Tiết</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="allprice">
                                            Số lượng : <span>{{count($orders)}}</span>
                                            <br><br>
                                            Tổng tiền: <span class="full-price">{{$order->total_price}} đ</span>

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
        </div>
    </div>
</div>
@if (session('cart'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    Swal.fire(
  'Đặt hàng thành công!',
  'Cảm ơn bạn đã thanh toán sản phẩm',
  'Ok'
)

</script>
@endif
@if (session('decline'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    Swal.fire(
  'Bạn đã hủy đơn hàng thành công!',
  'OK'
)

</script>
@endif


@endsection

