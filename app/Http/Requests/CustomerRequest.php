<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
class CustomerRequest extends FormRequest
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
            'location' => 'required|max:1000',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'date_of_birth' => 'required|date|before:'.Carbon::now()->subDay()->format('Y-m-d'),
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập họ và tên',
            'date_of_birth.required' => 'Bạn phải nhập ngày sinh',
            'date_of_birth.date' => 'Bạn phải nhập ngày.',
            'date_of_birth.before' => 'Bạn phải nhập ngày trước '.Carbon::now()->subDay()->format('d-m-Y'),
            'location.required' => 'Địa chỉ không được để trống',
            'location.max' => 'Địa chỉ không quá 1000 ký tự',
            'phone.required' => 'số điện thoại không được trống',
            'phone.regex' => 'Vui lòng nhập đúng định dạng',
        ];
    }
}
