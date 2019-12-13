@extends('admin/layouts/main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm số lượng sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thêm số lượng sản phẩm</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form action="{{route('admin.save_add_properties_amount')}}" method="post" >
            @csrf
        @foreach($properties as $property)
                <input type="hidden" name="properties_id[]" value="{{$property->id}}">
            <div class="row">
                <p>Màu : <a>{{$property->color->name}}</a></p>
                <p>size :<a href="index.html">{{$property->size}}</a></p>
            </div>
                <input type="number" name="amount[{{$property->id}}]">

        @endforeach
            <button type="sunmit" class="btn btn-success">Cập Nhật </button>
        </form>

        <!-- /.content -->
    </div>
@endsection
