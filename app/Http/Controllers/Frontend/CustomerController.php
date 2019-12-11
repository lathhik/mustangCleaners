<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function registerAction(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'register_email' => 'required|email|unique:customers,email',
            'password' => 'required|min:6|confirmed',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'phone_optional' => 'required'

        ]);

        $address = new Address();
        $address->address_line_1 = $request->address_line_1;
        $address->address_line_2 = $request->address_line_2;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->zip = $request->zip;

        $address->save();


        $customer = new Customer();
        $customer->address_id = $address->id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->register_email;
        $customer->phone = $request->phone;
        $customer->phone_optional = $request->phone_optional;
        $customer->password = bcrypt($request->password);

        if ($customer->save()) {
            return redirect()->route('index');
        }

    }
}
