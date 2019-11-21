<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryBrandRequest extends FormRequest
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
            'name' => 'required|unique:delivery_brand,name',
            'email' => 'required|email',
            'link' => 'required|max:1000',
            'link' => 'required|min:5',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống',
            'name.unique' => 'Tên đã tồn tại',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'link.required' => 'Vui lòng điền link liên kết',
            'link.max' => 'Link liên kết không quá 1000 ký tự',
            'link.min' => 'Link liên kết không được ít hơn 5 ký tự',
        ];
    }
}
