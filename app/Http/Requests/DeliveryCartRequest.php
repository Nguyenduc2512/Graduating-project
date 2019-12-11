<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class DeliveryCartRequest extends FormRequest
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
            'delivery_id' => ['required'],
        ];
        return $validate;
    }
    public function messages()
    {
        return [
            'delivery_id.required' => 'Bạn phải nhập tên đối tác',
        ];
    }
}
