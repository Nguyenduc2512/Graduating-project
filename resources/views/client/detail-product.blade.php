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
                <div class="col-md-7">
                    <ul id="imageGallery">
                        <li data-thumb="{{url('/')}}/{{$product->picture}}"
                            data-src="{{url('/')}}/{{$product->picture}}">
                            <img src="{{url('/')}}/{{$product->picture}}" width="100%" />
                        </li>
                        @foreach($album as $picture)
                        <li data-thumb="{{url('/')}}/{{$picture->picture}}"
                            data-src="{{url('/')}}/{{$picture->picture}}">
                            <img src="/{{$picture->picture}}" width="100%" />
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-5">
                    <h3>{{$product->name}}</h3>
                    <p>Giá bán: <span class="price">{{$product->price}}</span></p>
                    <hr>
                    <p>Thương hiệu <span class="cate"><a href="cate.html">{{$product->brand->name}}</a></span></p>
                    <hr>
                    <div class="col-lg-12 ">
                        <form action="{{route('member.add_item')}}" method="post" id="new_order">
                            @csrf
                            <input type="hidden" id="proID" value="{{$product->id}}" name="product_id">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Color*</label>
                                        <select name="color_id" id="colorID" class="form-control findBtn">
                                            <option selected value="">--</option>
                                            @foreach($colors as $color)
                                            <option value="{{$color->color_id}}">
                                                {{$color->color->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @if($errors->first('color_id'))
                                        <span class="text-danger"> {{$errors->first('color_id')}} </span>
                                        @endif
                                        @if($errors->first('color_id_order'))
                                        <span class="text-danger"> {{$errors->first('color_id_order')}} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group findAmount" id="size3">
                                        <label for="">Size*</label>
                                        <select name="size" class="form-control" id="size">
                                            <option selected value="">--</option>
                                        </select>
                                        @if($errors->first('size'))
                                        <span class="text-danger"> {{$errors->first('size')}} </span>
                                        @endif
                                        @if($errors->first('size_order'))
                                        <span class="text-danger"> {{$errors->first('size_order')}} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group" id="amount1">
                                        <label for="">Số lượng</label>
                                        <input type="number" name="amount" class="form-control" placeholder="--" max="99" min="1" id="amount">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @if(Auth::check())
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                            @endif
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-block btn-danger" onclick="showOrder()">Đặt hàng</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-info"> Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="{{route('member.show_form_order')}}" id="show_form_order" method="post">
                            @csrf
                            <input type="hidden" id="product_id_order" name="product_id_order">
                            <input type="hidden" id="color_id_order" name="color_id_order">
                            <input type="hidden" id="size_order" name="size_order">
                            <input type="hidden" id="amount_order" name="amount_order">

                        </form>
                    </div>
                </div>
                <div class=" container" style="margin-top: 30px;">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Đánh
                                giá nhận xét</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h4>Mô tả</h4>
                            <p>{{$product->description}}.</p>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="col-md-12">
                                <h4>Các bình luân trước</h4>
                                <div class="user-comment">
                                    <div class="comments-section">
                                        <?php $i=1;$a=1;$b=1 ?>
                                        @foreach($comment as $c)
                                        <div class="comment-post">
                                            <div class="comment-img"><img src="{{url('/')}}/{{$c->user->avatar}}" />
                                            </div>
                                            <div class="comment-details">
                                                <p><span class="comment-author">{{$c->user->name}}</span>
                                                    <p class="comment-content">{{$c->content}}
                                                    </p>
                                                    <div class="comment-like-unlike">
                                                        <?php
                                                        $replycomment = App\Models\Reply_Comment::where('comment_id', $c->id)->orderBy('id', 'DESC')->limit(4)->get(); ?>
                                                        <span data-toggle="collapse"
                                                            data-target="#reply{{$i++}}">({{count($replycomment)}})<i
                                                                class="fa fa-reply" aria-hidden="true"></i></span>
                                                    </div>
                                            </div>
                                        </div>
                                        <div id="reply{{$a++}}" class="collapse">
                                            @foreach($replycomment as $rc)
                                            <div class="comment-post-reply">
                                                <div class="comment-img">
                                                    @if($rc->user_id == 0)
                                                    <img src="{{url('/')}}/{{$rc->admin->avatar}}" width="100%" alt="">
                                                    @else
                                                    <img src="{{url('/')}}/{{$rc->user->avatar}}" width="100%" alt="">
                                                    @endif
                                                </div>
                                                <div class="comment-details">
                                                    @if($rc->user_id == 0)
                                                    <p><span class="comment-author">{{$rc->admin->name}}</span><span
                                                            class="comment-time" style="color: red">Quản trị
                                                            viên</span>
                                                    </p>
                                                    @else
                                                    <p><span class="comment-author">{{$rc->user->name}}</span><span
                                                            class="comment-time">Thành
                                                            viên</span></p>
                                                    @endif
                                                    <p class="comment-content">{{$rc->content}}
                                                    </p>
                                                    <div class="comment-like-unlike">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="nd_reply1">
                                                <div class="row">
                                                    <div class="col-1">
                                                        @if(!Auth::user())
                                                        <img src="{{url('/')}}/images/default.png" width="100%" alt="">
                                                        @else
                                                        <img src="{{url('/')}}/{{Auth::user()->avatar}}" width="100%"
                                                            alt="">
                                                        @endif
                                                    </div>
                                                    <div class="col-11">
                                                        <form action="{{route('member.replycomment')}}" method="post"
                                                            class="formDemo">
                                                            @csrf
                                                            @if(!Auth::user())
                                                            <input type="hidden" name="user_id" value="">
                                                            @else
                                                            <input type="hidden" name="admin_id" value="0">
                                                            <input type="hidden" name="comment_id" value="{{$c-> id}}">
                                                            <input type="hidden" name="user_id"
                                                                value="{{Auth::user()->id}}">
                                                            @endif
                                                            <textarea rows="3" cols="50" name="content"
                                                                placeholder="Nhập trả lời"></textarea>

                                                            <div class="link_rep1">
                                                                <button type="submit">Trả
                                                                    lời</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="comment-add">
                                            <div class="field-comment">
                                                <div class="row">
                                                    <div class="col-1">
                                                        @if(!Auth::user())
                                                        <img src="{{url('/')}}/images/default.png" width="100%" alt="">
                                                        @else
                                                        <img src="{{url('/')}}/{{Auth::user()->avatar}}" width="100%"
                                                            alt="">
                                                        @endif
                                                    </div>
                                                    <div class="col-11">
                                                        <form action="{{route('member.comment')}}" method="post"
                                                            id="formDemo1">
                                                            @csrf
                                                            @if(!Auth::user())
                                                            <input type="hidden" name="user_id" value="">
                                                            @else
                                                            <input type="hidden" name="user_id"
                                                                value="{{Auth::user()->id}}">
                                                            @endif
                                                            <input type="hidden" name="product_id"
                                                                value="{{$product->id}}">
                                                            <textarea rows="3" cols="50" name="content"
                                                                placeholder="Mời bạn nhập bình luận"></textarea>
                                                            @if($errors->first('content'))
                                                            <span
                                                                class="text-danger">{{$errors->first('content')}}</span>
                                                            @endif
                                                            <div class="link_rep1">
                                                                <button type="submit">Trả
                                                                    lời</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <div class="p_nd wow fadeInUp selectProduct" data-title="{{$pc->id}}"
                    data-id="{{$pc->name}}" data-size="{{$pc->price}}"
                    data-weight="{{ $pc->price }}" data-processor="{{ $pc->description }}" data-brand ="{{ $pc->brand->name }}">
                    <a href="{{route('detail', ['id' => $pc->id])}}">
                        <img src="{{url('/')}}/{{$pc->picture}}" width="100%" alt="" class="imgFill productImg">
                        <div class="nd_hover">
                            <a href="{{route('member.add_to_favorite', ['id' => $pc->id])}}"><i
                                    class="fas fa-heart"></i></a>
                            <a href="{{route('detail', ['id' => $pc->id])}}"><i class="far fa-eye"></i></a>
                            <a class=" addButtonCircular addToCompare"> <i class="fas fa-less-than-equal"></i></a>
                        </div>
                        <a href="{{route('detail', ['id' => $pc->id])}}">
                            <h3>{{$pc->name}}</h3>
                        </a>
                        <p>{{$pc->price}}đ </p>
                    </a>
                </div>
            </div>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection