@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh mục sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh mục sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div>
                        <div class="container" style="margin-top: 50px;" id="tabs">
                            <ul class="nav" id="pills-tab" role="tablist">
                                <li class="nav-item"
                                    style="border: #0000ff 1px solid; width: 200px; margin-right: 20px; border-radius: 3px; text-align: center">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="true">Tất cả sản phẩm</a>
                                </li>
                                <br>
                                <li class="nav-item"
                                    style="border: #0000ff 1px solid; width: 200px; margin-right: 20px; border-radius: 3px; text-align: center">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Đang kinh
                                        doanh</a>
                                </li>
                                <br>
                                <li class="nav-item"
                                    style="border: #0000ff 1px solid; width: 200px; border-radius: 3px; text-align: center">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">Ngừng kinh
                                        doanh</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            {{--                                      <th>STT</th>--}}
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Đường dẫn</th>
                                            <th>Album</th>
                                            <th>Trạng thái</th>
                                            <th width="150px"> <a href="{{route('admin.add_product')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td><img src="{{url('/')}}/{{$product->picture}}" height="50px"></td>
                                            <td>{{$product->link}}</td>
                                            <td><a href="{{route('admin.show_album', ['id' => $product->id])}}"><i
                                                        class="fas fa-photo-video"></i></a></td>
                                            <td width="200px">
                                                @if($product->status == 1)
                                                Đan bán
                                                @else
                                                Ngừng kinh doanh
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.edit_product', ['id' => $product->id])}}"
                                                    class="btn btn-xs btn-info">
                                                    <i class="fa fa-pencil"></i> Cập nhật
                                                </a>
                                                <a href="{{route('admin.disable_product', ['id' => $product->id])}}"
                                                    class="btn btn-xs btn-danger btn-remove">
                                                    <i class="fa fa-trash"></i> Xoá
                                                </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Đường dẫn</th>
                                            <th>Album</th>
                                            <th>Trạng thái</th>
                                            <th width="150px"> <a href="{{route('admin.add_brand')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activeProducts as $activeProduct)
                                        <tr>
                                            <td>{{$activeProduct->name}}</td>
                                            <td><img src="{{url('/')}}/{{$activeProduct->picture}}" height="50px"></td>
                                            <td>{{$activeProduct->link}}</td>
                                            <td><a href="{{route('admin.show_album', ['id' => $activeProduct->id])}}"><i
                                                        class="fas fa-photo-video"></i></a></td>
                                            <td width="200px">
                                                @if($activeProduct->status == 1)
                                                Đan bán
                                                @else
                                                Ngừng kinh doanh
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.edit_product', ['id' => $activeProduct->id])}}"
                                                    class="btn btn-xs btn-info">
                                                    <i class="fa fa-pencil"></i> Cập nhật
                                                </a>
                                                <a href="{{route('admin.disable_product', ['id' => $activeProduct->id])}}"
                                                    class="btn btn-xs btn-danger btn-remove">
                                                    <i class="fa fa-trash"></i> Xoá
                                                </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Đường dẫn</th>
                                            <th>Album</th>
                                            <th>Trạng thái</th>
                                            <th width="150px"> <a href="{{route('admin.add_brand')}}"
                                                    class="btn btn-xs btn-success">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($deactivateProducts as $deactivateProduct)
                                        <tr>
                                            <td>{{$deactivateProduct->name}}</td>
                                            <td><img src="{{url('/')}}/{{$deactivateProduct->picture}}" height="50px">
                                            </td>
                                            <td>{{$deactivateProduct->link}}</td>
                                            <td><a
                                                    href="{{route('admin.show_album', ['id' => $deactivateProduct->id])}}"><i
                                                        class="fas fa-photo-video"></i></a></td>
                                            <td width="200px">
                                                @if($deactivateProduct->status == 1)
                                                Đan bán
                                                @else
                                                Ngừng kinh doanh
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.edit_product', ['id' => $deactivateProduct->id])}}"
                                                    class="btn btn-xs btn-info">
                                                    <i class="fa fa-pencil"></i> Cập nhật
                                                </a>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection

<style>
#pills-tab .active {
    color: #000;
    font-weight: bold;
}
</style>