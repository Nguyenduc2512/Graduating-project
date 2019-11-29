<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'name' => 'required',
            'content' => 'required|max:1000',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập họ và tên',
            'content.required' => 'Nội dung không được để trống',
            'content.max' => 'Nội dung không quá 1000 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Vui lòng điền đúng định dạng',
            'phone.required' => 'số điện thoại không được trống',
            'phone.regex' => 'Vui lòng nhập đúng định dạng',
        ];
    }
}
