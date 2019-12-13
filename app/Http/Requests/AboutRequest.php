<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class AboutRequest extends FormRequest
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
            'info' =>[
                'required',
            ],
            'mission' =>[
                'required',
            ],
            'vision' =>[
                'required',
            ],
            'slogan' =>[
                'required',
            ]
        ];
        return $validate;
    }
    public function messages()
    {
        return [
            'info.required' => 'Bạn phải nhập thông tin!',
            'mission.required' => 'Bạn phải nhập nhiệm vụ!',
            'slogan.required' => 'Bạn phải nhập slogan!',
            'vision.required' => 'Bạn phải nhập tầm nhìn!',
        ];
    }
}
