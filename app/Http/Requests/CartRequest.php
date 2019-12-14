<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'size' => 'required',
            'color_id' => 'required',
            'amount' => 'required'
        ];
    }

    public function messages()
    {
        return[
        'size.required' => 'Bạn chưa chọn size',
        'color_id.required' => 'Bạn chưa chọn màu',
        'amount.required' => 'Bạn chưa số lượng mua hàng'
        ];
    }
}
