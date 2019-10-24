<?php

namespace App\Http\Controllers\Frontend;

use App\Backend\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function index()
    {
        return view('frontend.pages.login-register.login');
    }

    public function register()
    {
        return view('frontend.pages.login-register.register');
    }

    public function registerAction(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required'

        ]);

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);

        if ($customer->save()) {
            return redirect()->route('index');
        }

    }
}
