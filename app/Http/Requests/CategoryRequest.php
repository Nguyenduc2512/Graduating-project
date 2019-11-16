<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                Rule::unique('categories')->ignore($this->id),
            ],
            'description' => 'required|max:1000'
        ]; 
        if(!$this->id){
        }
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng điền tên danh mục',
            'name.unique' => 'Tên đã tồn tại, điền tên danh mục khác',
            'description.required' => 'Mô tả không được để trống',
            'description.max' => 'Mô tả không quá 1000 ký tự',
        ];
    }
}

