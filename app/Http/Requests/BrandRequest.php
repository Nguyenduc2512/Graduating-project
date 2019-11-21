<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class BrandRequest extends FormRequest
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
                Rule::unique('brands')->ignore($this->id),
            ],
            'link' =>[
                'required',
            ],
        ];
        if(!$this->id){
            $validate['logo'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập tên đối tác',
            'link.required' => 'link liên kết không được để trống',
            'logo.required' => 'logo không được trống',
            'logo.file' => 'Vui lòng nhập đúng định dạng file',
            'logo.mimes' => 'Vui lòng nhập đúng định dạng ảnh',
        ];
    }
}
