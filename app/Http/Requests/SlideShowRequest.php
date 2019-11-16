<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideShowRequest extends FormRequest
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
            'picture' => 'required|file|mimes:jpg,jpeg,png',
            'url' => 'required|max:1000',
            'url' => 'required|min:5',
        ];
    }
    public function messages()
    {
        return [
            'picture.required' => 'Vui lòng chọn ảnh',
            'picture.mimes' => 'Vui lòng chọn file có định dạng JPG,JPEG,PNG',
            'url.required' => 'Vui lòng điền link liên kết',
            'url.max' => 'Link liên kết không quá 1000 ký tự',
            'url.min' => 'Link liên kết không được ít hơn 5 ký tự',
        ];
    }
}
