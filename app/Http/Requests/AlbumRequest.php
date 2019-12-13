<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'picture' => 'required|file|mimes:jpg,jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            'picture.required' => 'Bạn chưa chọn ảnh',
            'picture.file' => 'Vui lòng chọn file có định dạng JPG,JPEG,PNG'

        ];
    }
}
