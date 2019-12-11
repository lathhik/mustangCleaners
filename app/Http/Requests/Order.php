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
            "pickup_address_line_1" => 'required',
            "pickup_address_line_2" => 'required',
            "pickup_city" => 'required',
            "pickup_state" => 'required',
            "pickup_zip" => 'required',
            "delivery_address_line_1" => 'required',
            "delivery_address_line_2" => 'required',
            "delivery_city" => 'required',
            "delivery_state" => 'required',
            "delivery_zip" => 'required',
            "service_type"=>'required',
            "pickup_date"=>'required',
            "pickup_time_from" => 'required',
            "pickup_time_to" => 'required',
        ];
    }
}
