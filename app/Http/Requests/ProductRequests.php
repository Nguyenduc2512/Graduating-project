<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequests extends FormRequest
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
            'name' => 'required|unique:products,name',
            'description' => 'required|max:1000',
            'price' => 'required|integer|min:0',
            'picture' => 'required|file|mimes:jpg,jpeg,png'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Sản phẩm này đã tồn tại',
            'description.require' => 'Mô tả không được để trống',
            'description.max' => 'Mô tả không quá 1000 ký tự',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.integer' => 'Vui lòng điền số',
            'price.min' => 'Gía sản phẩm không thể âm',
            'picture.required' => 'Ảnh sản phẩm không được trống',
            'picture.mimes' => 'Vui lòng chọn file có định dạng JPG,JPEG,PNG'
        ];
    }
}
