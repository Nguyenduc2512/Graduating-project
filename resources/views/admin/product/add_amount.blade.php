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
    <div class="container">
        <form action="{{route('admin.save_add_properties_amount')}}" method="post">
            @csrf
            <div class="row">
                @foreach($properties as $property)
                <div class="col-md-6 bgr">
                    <input type="hidden" name="properties_id[]" value="{{$property->id}}">
                    <div class="row">
                        <div class="col-md-6 pl20">
                            <p>Cho sản phẩm có <br> màu : {{$property->color->name}} và size : {{$property->size}}</p>
                        </div>
                        <div class="col-md-6 pl20">
                            <input style="text-align: center;" type="number" value="1" min="1" max="99"
                                name="amount[{{$property->id}}]">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="sunmit" class=" btn-success">Cập Nhật </button>
        </form>

    </div>
    <!-- /.content -->
</div>
@endsection

<style>
.bgr {
    -webkit-box-shadow: 0 0 4px #999;
    box-shadow: 0 0 4px #999;
    padding: 20px;
    padding-left: 20px !important;
    margin-bottom: 50px;
}

.pl20 {
    padding-left: 20px;
}
</style>