@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Thêm sản phẩm</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form action="{{route('admin.add_product')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <b>Tên sản phẩm</b>
                  <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @if($errors->first('name'))
                        <span class="text-danger"> {{$errors->first('name')}} </span>
                    @endif
                </div>
                <div class="form-group">
                  <b>Nhà phân phối</b>
                  <select name="brand_id" class="form-control">
                    @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <b>Danh mục</b>
                  <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <b>Giá bán</b>
                  <input type="text" name="price" class="form-control" required="" aria-required="true" value="{{old('price')}}">
                    @if($errors->first('price'))
                        <span class="text-danger"> {{$errors->first('price')}} </span>
                    @endif
                </div>
                  <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                          <img name="picture" id="" src="{{asset('/admin/dist/img/photo1.png')}}" width="100%" required="" aria-required="true">
                      </div>
                  </div>
                  <div class="form-group">
                      <b>Ảnh sản phẩm</b>
                      <input type="file" id="product_image" name="picture" class="form-control">
                      @if($errors->first('picture'))
                          <span class="text-danger"> {{$errors->first('picture')}} </span>
                      @endif
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <b>Mô tả</b>
                      <textarea class="form-control" rows="5" name="description"></textarea>
                      @if($errors->first('description'))
                          <span class="text-danger"> {{$errors->first('description')}} </span>
                      @endif
                  </div>
                  <b>Màu sắc : </b>
                  <div class="row">
                      <select name="color_id" multiple='multiple' id="select_color">
                          @foreach($colors as $color)
                              <option value="{{$color->id}}">{{$color->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <input type="hidden" value="1" name="status">
{{--                  @foreach($colors as $color)--}}
{{--                      <div class="checkbox">--}}
{{--                          <label><input type="checkbox" value="">{{$color->name}}</label>--}}
{{--                      </div>--}}
{{--                  @endforeach--}}
              </div>
            </div>
            <div class="col-md-12 text-left">
              <a href="listproduct.html" class="btn  btn-danger">Huỷ</a>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $('#select_color').multiSelect();
</script>
