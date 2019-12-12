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
                <li class="breadcrumb-item"><a href="{{route('admin.adminHome')}}">Home</a></li>
                <li class="breadcrumb-item active">Quản lý giới thiệu</li>
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
              @if (session('success'))
            <p style="width: 100%;height: 60px; background:#c1b999;margin-top: 10px;padding-top: 15px;padding-left: 20px;border-radius: 4px"><span class="text-white">{{ session('success') }}</span></p>
                      @endif
              <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Thông tin
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nhiệm vụ
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tầm nhìn
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Slogan
                        </th>
                        <th>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td>{{$about->info}}</td>
                        <td>{{$about->mission}}</td>
                        <td>{{$about->vision}}</td>
                        <td>{{$about->slogan}}</td>
                        <td>
                          <a href="{{route('admin.edit_about', ['id' => $about->id])}}" class="btn btn-xs btn-info">
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

