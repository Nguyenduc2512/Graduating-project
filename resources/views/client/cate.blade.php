@extends('client/layouts/main')
@section('content')
   <div class="path_link">
        <div class="container">
            <a href="index.html">Trang chủ</a> > <span>Tên danh mục</span>
        </div>
    </div>

    <div class="cate">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="fitter">
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <h3>Tên dang mục</h3>
                                @foreach($category as $cate)
                                <div class="col-lg-12">
                                    <a href="{{route('cate', ['id' => $cate->id])}}"> {{$cate->name}} <span>({{$cate->products_count}})</span></a>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-12 col-6">
                                <h3 style="margin-top: 20px;">Size</h3>
                                <form action="">
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 39
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 40
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 41
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 42
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="checkbox" name="1"> 43
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="sortby">
                        <select name="" id="">
                            <option value="">Sắp xếp theo</option>
                            <option value="">Mới nhất</option>
                            <option value="">Giá: Thấp - Cao</option>
                            <option value="">Giá: Cao - Thấp</option>
                        </select>
                    </div>
                    <div class="pcate">
                        <div class="row">
                            @if(count($productcate) == 0)
                            Không có sản phẩm thuộc danh mục này!
                            @else
                            @foreach($productcate as $pc)
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="{{route('detail', ['id' => $pc->id])}}"> <img src="{{url('/')}}/{{$pc->picture}}" width="100%" alt=""></a>
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
                            @endif
                            <div class="col-12">
                                <ul class="pagination" style="float: right;">
                                {{ $productcate->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection