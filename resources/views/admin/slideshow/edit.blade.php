@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sửa slider</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="listimg.html">Quản lý slider</a></li>
                                <li class="breadcrumb-item active">Sửa slider</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>STT</b>
                                    <input type="number" name="" class="form-control" value="1">
                                </div>

                                <div class="form-group">
                                    <b>Thông tin</b>
                                    <input type="text" name="" class="form-control" value="ssssss">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <img name="" id="" src="../../dist/img/photo1.png" width="100%" required=""
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <b>Ảnh sản phẩm</b>
                                    <input type="file" id="product_image" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-left">
                            <a href="listimg.html" class="btn  btn-danger">Huỷ</a>
                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>

    
@endsection

