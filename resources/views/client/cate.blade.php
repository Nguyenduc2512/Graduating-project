@extends('client/layouts/main')
@section('content')
<div class="path_link">
    <div class="container">
        <a href="index.html">Trang chủ</a> > <span>Lọc sản phẩm</span>
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
                                <a href="{{route('cate', ['id' => $cate->id])}}" @if($cate->id == $id)
                                    style="color:red;text-decoration: underline" @endif> {{$cate->name}}
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-12 col-6">
                            <h3 style="margin-top: 20px;">Thương hiệu</h3>
                            @foreach(App\Models\Brand::where('status','1')->get() as $brand)
                            <div class="col-lg-12 mt-2">
                                <input type="checkbox" value="{{$brand->id}}" id="brand"
                                    class="find brand"><span>{{$brand->name}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="sortby">
                    <select name="" id="seID" class="find">
                        <option value="">Sắp xếp theo</option>
                        <option value="new">Mới nhất</option>
                        <option value="asc">Giá: Thấp - Cao</option>
                        <option value="desc">Giá: Cao - Thấp</option>
                    </select>
                    <input type="hidden" value="{{$id}}" name="" id="cateID">
                </div>
                <div class="pcate">
                    <div class="row" id="productCate">
                        @include('client/procate')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
