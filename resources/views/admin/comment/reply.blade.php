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
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                @if (session('msg'))
                <p class="mb-0" style="color: red">{{ session('msg') }}</p>
                @endif
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                <tr style="background-color: #777;color: white">
                                    <td>{{$comment1->product->name}}</td>
                                    <td>{{$comment1->user->name}}</td>
                                    <td>{{$comment1->content}}</td>
                                    <td></td>
                                </tr>
                                @foreach($replycomment as $comment)
                                <tr>
                                    <td></td>
                                    <td width="200px">
                                        @if($comment->user_id == 0)
                                        <b>{{$comment->admin->name}}</b><br>
                                        (Quản trị viện)
                                        @else
                                        <b>{{$comment->user->name}}</b><br>
                                        (Thành viên)
                                        @endif
                                    </td>
                                    <td width="600px">{{$comment->content}}</td>
                                    <td>
                                        <a href="javascript:;"
                                            linkurl="{{route('admin.removereply_comment', ['id' => $comment->id])}}"
                                            class="btn btn-xs btn-danger btn-remove"> <i class="fa fa-trash"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Trả
                                lời</button>
                            <div id="demo" class="collapse">
                                <div class="nd_form_rep">
                                    <form action="{{route('admin.reply_comment', ['id' => $comment1->id])}}"
                                        method="post" id="formDemo1">
                                        @csrf
                                        <label>Nội dung trả lời</label>
                                        <input type="hidden" name="admin_id" value="{{Auth::guard('admins')->user()->id}}">
                                        <input type="hidden" name="comment_id" value="{{$comment1->id}}">
                                        <input type="hidden" name="user_id" value="0">
                                        <textarea class="form-control" name="content"
                                            rows="3">{{old('content')}}</textarea>
                                        @if($errors->first('content'))
                                        <span class="text-danger">{{$errors->first('content')}}</span>
                                        @endif
                                        <br>
                                        <button class="btn btn-sm btn-info" type="submit" style="margin-top: 10px">Phản
                                            hồi</button>
                                    </form>
                                </div>
                            </div>
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