@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách phản hồi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách phản hồi</li>
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
              @if (session('msg'))
                    <p class="mb-0" style="color: red">{{ session('msg') }}</p>
                    @endif
              <div class="row">
                <div class="col-sm-12 col-md-3 form-group"></div>
                <div class="col-sm-12 col-md-9 form-group"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>STT</th>
                              <th>Tên</th>
                              <th>Chức vụ</th>
                              <th>Nội dung</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $i=1 ?>
                        {{Auth::guard('admins')->user()->id}}
                        @foreach($replycomment as $comment)
                          <tr>
                              <td>{{$i++}}</td>
                              <td width="200px">
                                if($comment->user_id == 0)
                                {{$comment->user->name}}
                                else
                                {{$comment->admin->name}}
                                endif
                              </td>
                              <td width="200px">{{$comment->comment->name}}</td>
                              <td width="600px">{{$comment->content}}</td>
                              <td>
                                <a href="/admin1/slideshow/edit" class="btn btn-xs btn-info">
                                  <i class="fa fa-pencil"></i> Cập nhật
                                </a>
                                <a href="javascript:;"linkurl="{{route('admin.remove_comment', ['id' => $comment->id])}}" class="btn btn-xs btn-danger btn-remove"> <i class="fa fa-trash"></i> XOA </a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>STT</th>
                              <th>Tên</th>
                              <th>Tên sản phẩm</th>
                              <th>Nội dung</th>
                              <th></th>
                          </tr>
                      </tfoot>
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

