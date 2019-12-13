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
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2"rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="ID: activate to sort column descending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Tên kháchhàng</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">SĐT</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Địa chỉ</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Tổng tiền phẩm</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Ghi chú</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"colspan="1">Ngày đặt</th>
                     </tr>
                  </thead>
                  <tbody>

                   @if($cart->status == 2)
                   <tr role="row" class="odd">
                     <td>{{$cart->id}}</td>
                     <td>{{$cart->user->name}}</td>
                     <td>{{$cart->user->email}}</td>
                     <td>{{$cart->user->phone}}</td>
                     <td>{{$cart->user->location}}</td>
                     <td>{{$cart->total}}</td>
                     <td>Ship hàng nhanh</td>
                     <td>{{$cart->created_at}}</td>
                </tr>
                @endif

             </tbody> 
          </table>
          <div class="col-lg-12">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Chọn đơn vị giao hàng</button>
            @if($errors->first('delivery_id'))
            <p style="width: 100%;height: 60px; background:#c1b999;margin-top: 10px;padding-top: 15px;padding-left: 20px;border-radius: 4px"><span class="text-white">{{$errors->first('delivery_id')}}</span></p>
                      @endif
            <div id="demo" class="collapse">
               <div class="nd_form_rep">
                  <form action="{{route('admin.delivery', ['id'=>$cart->id])}}" method="post" id="formDemo1">
                     @csrf
                     <label>Đơn vị giao hàng</label>
                     <select class="form-control" name="delivery_id">
                        <option>--</option>
                        @foreach($delivery as $d)
                        <option value="{{$d->id}}">{{$d->name}}</option>
                        @endforeach
                     </select>
                     <button class="btn btn-sm btn-info" type="submit" style="margin-top: 10px">Xác nhận</button>
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