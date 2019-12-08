<?php

namespace App\Http\Requests;

use App\Http\Controllers\User\UserController;
use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    protected $redirectRoute = 'sign_up_false' ;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:4',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6',
            'confirm_pass' => 'required|same:password',
            'avatar'=>'file|mimes:jpeg,png,jpg',
            'location' => 'required',
            'phone' => 'required|unique:users,phone',
            'date_of_birth' => 'required|date'
        ];
    }

    public function messages(){
        return [
            'name.required'                 => 'Nhập tên của bạn !',
            'email.required'                => 'Email của bạn không được trống',
            'email.unique'                  => 'Email đã được sử dụng',
            'password.required'             => 'Mật khẩu không được để trống',
            'password.min'                  => 'Mật khẩu phải có 6 kí tự',
            'confirm_pass.same'             => 'Mật khẩu không khớp',
            'confirm_pass.required'         => 'Không được để trống',
            'avatar.required'               => 'Không được để trống',
            'avatar.mimes'                  => 'Hãy sử dụng file JPEG/PNG/JPG',
            'phone.required'                => 'Số điện thoại không được để trống',
            'phone.unique'                  => 'Số điện thoại đã được đăng ký',
            'phone.numeric'                 => 'Vui lòng nhập đúng số điện thoại',
            'location.required'             => 'Địa chỉ không được để trống',
        ];
    }
}
