<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
class PromoRequest extends FormRequest
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
            'down' =>[
                'required',
                'integer',
                'max:99',
                'min:1',
            ],
            'amount' =>[
                'required',
                'integer',
                'min:1',
            ],
        ]; 
            $validate['start_time'] = 'required|date|after:'.Carbon::now()->subDay()->format('Y-m-d');
            $validate['end_time'] = 'required|date|after:start_time';
    
        return $validate;
    }
    public function messages(){
        return [
            'down.required' => 'Giá trị không được để trống',
            'down.integer' => 'Giá trị phải là số nguyên',
            'down.max' => 'Giá trị không được lớn hơn 99%',
            'down.min' => 'Giá trị không được nhỏ hơn 1%',
            'amount.required' => 'Số lượng không được để trống',
            'amount.integer' => 'Số lượng phải là số nguyên',
            'amount.min' => 'Số lượng không được nhỏ hơn 1',
            'start_time.required' => 'Ngày bắt đầu không được để trống',
            'start_time.date' => 'Ngày bắt đầu phải là ngày',
            'start_time.after' => 'Ngày bắt đầu không được sau ngày'.now()->subDay()->format('Y-m-d'),
            'end_time.required' => 'Ngày kết thúc không được để trống',
            'end_time.date' => 'Ngày kết thúc phải là ngày',
            'end_time.after' => 'Ngày kết thúc không được sau ngày bắt đầu',
        ];
    }
}

