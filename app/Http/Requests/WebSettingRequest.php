<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class WebSettingRequest extends FormRequest
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
            'address' =>[
                'required',
            ],
            'email' =>[
                'required',
                'email',
            ],
            'map' =>[
                'required',
            ]
        ];
        if(!$this->id){
            $validate['logo'] = 'required|file|mimes:jpeg,png';
            $validate['logoblue'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages()
    {
        return [
            'hotline.required' => 'Bạn phải nhập họ và tên',
            'hotline.regex' => 'Bạn phải nhập đúng định dạng số điện thoại',
            'address.required' => 'Địa chỉ không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Vui lòng điền đúng định dạng',
            'map.required' => 'Map không được để trống',
            'logo.required' => 'Ảnh đại diện không được trống',
            'logo.file' => 'Vui lòng nhập đúng định dạng file',
            'logo.mimes' => 'Vui lòng nhập đúng định dạng ảnh',
            'logoblue.required' => 'Ảnh đại diện không được trống',
            'logoblue.file' => 'Vui lòng nhập đúng định dạng file',
            'logoblue.mimes' => 'Vui lòng nhập đúng định dạng ảnh',
        ];
    }
}
