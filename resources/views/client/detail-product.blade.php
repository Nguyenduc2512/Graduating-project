@extends('client/layouts/main')
@section('content')
   <div class="path_link">
        <div class="container">
            <a href="{{route('home')}}">Trang chủ</a> > <span>{{$product->name}}</span>
        </div>
    </div>

    <div class="detail_product">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul id="imageGallery">
                        <li data-thumb="{{url('/')}}/{{$product->picture}}" data-src="{{url('/')}}/{{$product->picture}}">
                            <img src="{{url('/')}}/{{$product->picture}}" width="100%" />
                        </li>
                        <li data-thumb="{{url('/')}}/client/images/2.png" data-src="{{url('/')}}/client/images/2.png">
                            <img src="{{url('/')}}/client/images/2.png" width="100%" />
                        </li>
                        <li data-thumb="{{url('/')}}/client/images/3.png" data-src="{{url('/')}}/client/images/3.png">
                            <img src="{{url('/')}}/client/images/3.png" width="100%" />
                        </li>
                        <li data-thumb="{{url('/')}}/client/images/4.png" data-src="{{url('/')}}/client/images/4.png">
                            <img src="{{url('/')}}/client/images/4.png" width="100%" />
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h3>{{$product->name}}</h3>
                    <p>Giá bán: <span class="price">{{$product->price}}</span></p>
                    <p>Tình trạng: Còn hàng</p>
                    <hr>
                    <p>Danh mục <span class="cate"><a href="cate.html">{{$product->category->name}}</a></span></p>
                    <hr>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Size*</label>
                                        <select name="" id="" class="form-control">
                                            @foreach($item as $i)
                                            <option value="{{$i->id}}">{{$i->size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Số lượng*</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row">
                                <div class="col-6">
                                    <a href="order.html" class="btn btn-block btn-danger">Đăng ký mua</a>
                                </div>
                                <div class="col-6">
                                    <div class="linkcart">
                                        <a href="listcart.html"> Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 30px;">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Mô tả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Đánh giá nhận xét</a>
                </li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <h4>Mô tả</h4>
                    <p>{{$product->description}}.</p>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="col-lg-8">
                        <h4>Đánh giá nhận xét</h4>
                        <form action="{{route('comment')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-2">
                                    <img src="client/images/member.png" width="100%" alt="">
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                    {{--<input type="hidden" name="user_id" value="{{Auth::user()->id}}">--}}
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="text" placeholder="Thêm bình luận" name="content" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info">Bình luận</button>
                                </div>
                            </div>
                        </form>
                        <div class="allcmt">
                            <h4>Các bình luân trước</h4>
                            <div class="row">
                                <div class="col-2">
                                    <img src="images/member.png" width="100%" alt="">
                                </div>
                                @foreach($comment as $c)
                                <div class="col-1o">
                                    <h5>Tên người bl:{{$c->user->name}}</h5>
                                    <p>{{$c->content}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spcate">
        <div class="title">
            <h1>Sản phẩm liên quan</h1>
        </div>
        <div class="container">
            <div class="row">
                @foreach($productCategory as $pc)
                <div class="col-md-3 col-6">
                    <div class="p_nd">
                        <a href="#"> <img src="{{url('/')}}/{{$pc->picture}}" width="100%" alt=""></a>
                        <div class="nd_hover">
                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                            <a href="{{route('detail', ['id' => $pc->id])}}"><i class="far fa-eye"></i></a>
                            <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                        </div>
                        <a href="{{route('detail', ['id' => $pc->id])}}">
                            <h3>{{$pc->name}}</h3>
                        </a>
                        <p>{{$pc->price}} đ</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection