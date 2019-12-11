<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $validate = [
            'url' => [
                'required',
                'max:1000',
                'min:5',
                Rule::unique('slideshows')->ignore($this->id),
            ],
        
        ];
        if(!$this->id){
            $validate['picture'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
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
