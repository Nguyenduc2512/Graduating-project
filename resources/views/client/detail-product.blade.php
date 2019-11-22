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
                            <form action="{{route('member.add_item')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Color*</label>
                                            <select name="color_id" onchange="select_size()" id="color_id" class="form-control">
                                                <option selected>--</option>
                                                @foreach($colors as $color)
                                                    <option id="{{$color->color_id}}" value="{{$color->color_id}}">
                                                        {{$color->color->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Size*</label>
                                            <select name="size" id="" class="form-control">
                                                @foreach($sizes as $size)
                                                    <option value="{{$size}}">
                                                        {{$size}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="">Số lượng*</label>

                                            <input type="number" name="amount" class="form-control" value="1">
                                        </div>
                                    </div>
                                </div><hr>
                                @if(Auth::check())
                                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                @else
                                    return {{route('login')}}
                                @endif
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <a href="order.html" class="btn btn-block btn-danger">Đặt hàng</a>
                                </div>
                                <div class="col-6">
                                    <div class="linkcart">
                                        <button type="submit"> Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
                        <div class="col-md-12">
                            <h4>Các bình luân trước</h4>
                            <div class="user-comment">
                                <div class="comments-section">
                                    <?php $i=1;$a=1;$b=1 ?>
                                    @foreach($comment as $c)
                                    <div class="comment-post">
                                            <div class="comment-img"><img src="{{url('/')}}/{{$c->user->avatar}}"/></div>
                                            <div class="comment-details">
                                                <p><span class="comment-author">{{$c->user->name}}</span>
                                                <p class="comment-content">{{$c->content}}</p>
                                            <div class="comment-like-unlike">
                                                <?php
                                                $replycomment = App\Models\Reply_Comment::where('comment_id', $c->id)->orderBy('id', 'DESC')->limit(4)->get(); ?>
                                                <span data-toggle="collapse" data-target="#reply{{$i++}}">({{count($replycomment)}})<i class="fa fa-reply" aria-hidden="true"></i></span>
                                            </div>
                                            </div>
                                    </div>
                                    <div id="reply{{$a++}}" class="collapse">
                                            @foreach($replycomment as $rc)
                                            <div class="comment-post-reply" >
                                                <div class="comment-img">
                                                    @if($rc->user_id == 0)
                                                    <img src="{{url('/')}}/{{$rc->admin->avatar}}" width="100%" alt="">
                                                    @else
                                                    <img src="{{url('/')}}/{{$rc->user->avatar}}" width="100%" alt="">
                                                    @endif
                                                </div>
                                                <div class="comment-details">
                                                    @if($rc->user_id == 0)
                                                    <p><span class="comment-author">{{$rc->admin->name}}</span><span class="comment-time" style="color: red">Quản trị viên</span></p>
                                                    @else
                                                    <p><span class="comment-author">{{$rc->user->name}}</span><span class="comment-time" >Thành viên</span></p>
                                                    @endif
                                                    <p class="comment-content">{{$rc->content}} </p>
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
                                                        <img src="{{url('/')}}/{{Auth::user()->avatar}}" width="100%" alt="">
                                                        @endif
                                                    </div>
                                                    <div class="col-11">
                                                    <form action="{{route('member.replycomment')}}" method="post" class="formDemo">
                                                        @csrf
                                                        @if(!Auth::user())
                                                        <input type="hidden" name="user_id" value="">
                                                        @else
                                                        <input type="hidden" name="admin_id" value="0">
                                                        <input type="hidden" name="comment_id" value="{{$c-> id}}">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        @endif
                                                        <textarea rows="3" cols="50" name="content" placeholder="Nhập trả lời"></textarea>

                                                        <div class="link_rep1">
                                                            <button  type="submit">Trả lời</button>
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
                                                        <img src="{{url('/')}}/{{Auth::user()->avatar}}" width="100%" alt="">
                                                        @endif
                                                   </div>
                                                   <div class="col-11">
                                                    <form action="{{route('member.comment')}}" method="post" id="formDemo1">
                                                        @csrf
                                                        @if(!Auth::user())
                                                        <input type="hidden" name="user_id" value="">
                                                        @else
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        @endif
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <textarea rows="3" cols="50" name="content" placeholder="Mời bạn nhập bình luận"></textarea>
                                                        @if($errors->first('content'))
                                                        <span class="text-danger">{{$errors->first('content')}}</span>
                                                        @endif
                                                        <div class="link_rep1">
                                                            <button  type="submit">Trả lời</button>
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


