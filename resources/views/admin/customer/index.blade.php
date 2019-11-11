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
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên thành viên
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">SĐT
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Số lượt mua
                        </th>
                        <th>
                            Loại thành viên
                        </th>
                    <th></th>
                    </thead>
                    @foreach($members as $member)
                          <tbody>
                        <td>{{$member->name}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->phone}}</td>
                        @foreach($counts as $count)
                            <td>
                                {{$count}}
                            </td>
                        @endforeach
                        <td></td>
                        <td>
                            @if($member->status == 0)
                                <a href="{{route('admin.block', ['id'=> $member->id ])}}" class="btn btn-xs btn-danger btn-remove">
                                    <i></i> Khóa tài khoản
                                </a>
                            @else
                                <a href="{{route('admin.unblock', ['id'=> $member->id ])}}" class="btn btn-xs btn-primary btn-remove">
                                    <i></i> Tái kích hoạt
                                </a>
                            @endif
                        </td>
                          </tbody>

                      @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>


@endsection

