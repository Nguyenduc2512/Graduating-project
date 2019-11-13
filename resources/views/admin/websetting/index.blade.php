@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quản lý thông tin Web</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quản lý thông tin Web</li>
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
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Logo
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Logo Blue
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Address
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Hotline
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Map
                        </th>
                        <th>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td><img src="{{url('/')}}/{{$web->logo}}" width="100px" alt=""></td>
                        <td><img src="{{url('/')}}/{{$web->logoblue}}" width="100px" alt=""></td>
                        <td>{{$web->email}}</td>
                        <td>{{$web->address}}</td>
                        <td>{{$web->hotline}}</td>
                        <td><iframe
                            src="{{$web->map}}"
                            width="250" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></td>
                        <td>
                          <a href="{{route('admin.edit_web', ['id' => $web->id])}}" class="btn btn-xs btn-info">
                            <i class="fa fa-trash"></i> Sửa
                          </a>
                        </td>
                      </tr>
                    </tbody>
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

