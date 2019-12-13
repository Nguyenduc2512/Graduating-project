<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $validate = [
            'name' => [
                'required',
                Rule::unique('delivery_brand')->ignore($this->id),
            ],
            'email' =>[
                'required',
                Rule::unique('delivery_brand')->ignore($this->id),
                'email',
            ],
            'link' =>[
                'required',
                Rule::unique('delivery_brand')->ignore($this->id),
                'max:1000',
                'min:5', 
            ],

        ];
        return $validate;
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống',
            'name.unique' => 'Tên đã tồn tại',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'link.required' => 'Vui lòng điền link liên kết',
            'link.max' => 'Link liên kết không quá 1000 ký tự',
            'link.min' => 'Link liên kết không được ít hơn 5 ký tự',
            'link.unique' => 'Liên kết đã tồn tại',
        ];
    }
}
