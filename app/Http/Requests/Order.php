<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class Order extends FormRequest
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
            'pickup_street_addr' => 'required',
            'pickup_house_no' => 'required',
            'deli_street_addr' => 'required',
            'deli_house_no' => 'required',
            'service_type' => 'required',
            'phone' => 'required',
            'pickup_date' => 'required',
            'pickup_time' =>    'required',
            'deli_date' => 'required',
            'deli_time' => 'required'
        ];
    }
}
