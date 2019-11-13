<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AccountAdminRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('admins')->ignore($this->id),
            ],
            'email' =>[
                'required',
                'email',
            ],
        ];
        if(!$this->id){
            $validate['avatar'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập họ và tên',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Vui lòng điền đúng định dạng',
            'avatar.required' => 'Ảnh đại diện không được trống',
            'avatar.file' => 'Vui lòng nhập đúng định dạng file',
            'avatar.mimes' => 'Vui lòng nhập đúng định dạng ảnh',
        ];
    }
}
