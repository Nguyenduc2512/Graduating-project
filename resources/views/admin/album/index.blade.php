@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Album ảnh: {{$product->name}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Album Ảnh</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <section class="content" style="padding: 20px">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Ảnh</h4>
                        </div>
                        <div class="col-md-2">
                            <h5>
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($album as $picture)
                        <div class="col-md-2">
                            <div class="img_album">
                                <img width="100%" src="/{{$picture->picture}}">
                                <div class="del_img">
                                    <a href="{{route('admin.remove_picture', ['id' => $picture->id])}}">
                                        X
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div style="margin-top: 50px">
                        <h5>Thêm ảnh mới</h5>
                        <form action="{{route('admin.new_picture', ['id' => $product->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="picture[]" multiple>
                            <button type="submit">Thêm ảnh</button>
                        </form>
                        @if($errors->first('picture'))
                            <span class="text-danger"> {{$errors->first('picture')}} </span>
                        @endif
                    </div>
                </section>

            </div>
        </div>

    </section>
    <!-- /.content -->

</div>


@endsection


<style>
.img_album img {
    object-fit: cover;
    height: 150px;
}

.del_img a {
    color: white;
    position: absolute;
    top: 0px;
    right: 8px;
    background: red;
    width: 25px;
    height: 25px;
    text-align: center;
}

.del_img a:hover {
    background: #000;
    color: white;
}
</style>
