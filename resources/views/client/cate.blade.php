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
                                <h3 style="margin-top: 20px;">Thương hiệu</h3>
                                    @foreach(App\Models\Brand::all() as $brand)
                                    <div class="col-lg-12 mt-2"> 
                                        <input type="checkbox" value="{{$brand->id}}" id="brand"  class="findBtn brand"><span>{{$brand->name}}</span>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    
                    <div class="sortby">
                        <select name="" id="seID" class="findBtn">
                            <option value="">Sắp xếp theo</option>
                            <option value="new">Mới nhất</option>
                            <option value="asc">Giá: Thấp - Cao</option>
                            <option value="desc">Giá: Cao - Thấp</option>
                        </select>
                        <select id="priceID" class="findBtn">
                            <option value="">Chọn giá</option>
                            <option value="0-500000">0-500.000</option>
                            <option value="500000-1000000">500.000 - 1000.000</option>
                            <option value="1000000-5000000">1.000.000 - 5.000.000</option>
                            <option value="5000000-1000000000">5.000.000 - lớn hơn</option>
                        </select>
                        
                    <input type="hidden" value="{{$id}}" name="" id="cateID">
                        
                    </div>
                    <div class="pcate">
                        <div class="row" id="productData">
                            <b style="width: 100%;margin-bottom: 20px;font-size: 17px">Tổng số kết quả : {{$productcate->total()}}</b>
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