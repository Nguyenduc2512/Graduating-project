@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách liên hệ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách liên hệ</li>
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
                            <table id="example2" class="table table-hover dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="ID: activate to sort column descending">
                                            STT</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Nội dung
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1">Tên
                                        </th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                    <tr role="row" class="odd">
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->content}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>
                                            <a href="http://gmail.com" class="btn btn-xs btn-primary">
                                                <i class="fa"></i> Trả lời
                                            </a>
                                            <a href="{{route('admin.remove_contact', ['id' => $contact->id])}}"
                                                class="btn btn-xs btn-danger btn-remove">
                                                <i class="fa fa-trash"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{--                    {{$contacts->links()}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection