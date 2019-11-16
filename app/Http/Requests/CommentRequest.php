<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CommentRequest extends FormRequest
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
            'content' => [
                'required',
                Rule::unique('admins')->ignore($this->id),
            ],
        ];
        if(!$this->id){
        }
        return $validate;
    }
    public function messages()
    {
        return [
            'content.required' => 'Bạn phải nhập họ và tên',
        ];
    }
}
