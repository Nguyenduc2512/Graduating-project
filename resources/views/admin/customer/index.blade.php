@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách khách hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách khách hàng</li>
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
                    <div class="row">
                        <div class="col-sm-12">
                            @if (session('success'))
                            <p class="text-danger"> {{session('success')}} </p>
                            @endif
                            <table id="example" class="table table-striped " style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="20px">STT</th>
                                        <th width="300px">Tên khách hàng</th>
                                        <th width="300px">Email</th>
                                        <th width="140px">Phone</th>
                                        <th width="400px">Địa chỉ</th>
                                        <th width="300px">Ngày sinh</th>
                                        <th width="400px">Giới thính</th>
                                        <th width="110px">Ảnh đại diện</th>
                                        <th width="70px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->location}}</td>
                                        <td>{{$user->date_of_birth}}</td>
                                        <td>
                                            @if($user->gender == 0)
                                            nam
                                            @else
                                            nữ
                                            @endif
                                        </td>
                                        <td><img src="{{url('/')}}/{{$user->avatar}}" width="100px"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới thính</th>
                                        <th width="200px">Ảnh đại diện</th>
                                        <th width="150px"> </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection