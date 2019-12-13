<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MatchOldPassword;

class ChangePassWordRequest extends FormRequest
{
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
        $validate = [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['required','same:new_password'],
            ];
        return $validate;
    }
    public function messages(){
        return [
            'current_password.required' => 'Vui lòng điền vào mật khẩu hiện tại',
            'new_password.required' => 'Mật khẩu mới không được để trống',
            'new_confirm_password.same' => 'Xác nhận mật khẩu phải giống mật khẩu mới',
            'new_confirm_password.required' => 'Xác nhận mật khẩu không được để trống',
        ];
    }
}

