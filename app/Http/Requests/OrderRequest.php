<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'color_id_order'=>'required',
            'size_order'=>'required',
            'amount_order'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'color_id_order.required' => 'Bạn chưa chọn màu',
            'size_order.required' => 'Bạn chưa chọn size',
            'amount_order.required' => 'Bạn chưa chọn size'
        ];
    }
}
