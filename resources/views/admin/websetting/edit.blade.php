@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Sửa thông tin Web</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="setting.html">Websetting</a></li>
                                <li class="breadcrumb-item active">Sửa thông tin Web</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>SDT</b>
                                    <input type="number" name="" class="form-control" value="54151551">
                                </div>

                                <div class="form-group">
                                    <b>Email</b>
                                    <input type="email" name="" class="form-control" value="email@gmail.com">
                                </div>

                                <div class="form-group">
                                    <b>Facebook</b>
                                    <input type="text" name="" class="form-control" value="link fb">
                                </div>

                                <div class="form-group">
                                    <b>Map</b>
                                    <input type="text" name="" class="form-control" value="link map">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <img name="" id="" src="../../dist/img/logoblue.png" width=" 100%" required=""
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <b>Logo</b>
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

