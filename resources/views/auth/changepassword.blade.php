@extends('client/layouts/main')
@section('content')
<div class="container" style="padding: 50px; height: 500px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thay đổi mật khẩu của bạn</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('member.password') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nhập mật khẩu hiện
                                tại</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password"
                                    autocomplete="current-password">
                                @if($errors->first('current_password'))
                                <span class="text-danger">{{$errors->first('current_password')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nhập mật khẩu
                                mới</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password"
                                    autocomplete="current-password">
                                @if($errors->first('new_password'))
                                <span class="text-danger">{{$errors->first('new_password')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Xác nhận mật khẩu
                                mới</label>

                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control"
                                    name="new_confirm_password" autocomplete="current-password">
                                @if($errors->first('new_confirm_password'))
                                <span class="text-danger">{{$errors->first('new_confirm_password')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Thay đổi mật khẩu
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection