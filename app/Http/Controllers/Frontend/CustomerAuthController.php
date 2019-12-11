<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerAuthController extends Controller
{
    use AuthenticatesUsers;

    public function loginAction(Request $request)
    {

        $this->validate($request, ['login_email' => 'required|email',
            'login_password' => 'required'
        ]);

        $customer = [];
        $customer['email'] = $request->login_email;
        $customer['password'] = $request->login_password;

        $remember = false;

        if ($request->input('remember_me')) {
            $remember = true;
        }

        if (Auth::guard('customer')->attempt($customer, $remember)) {
            return redirect()->intended(route('customer-dashboard'));
        };
        return redirect()->back()->with('fail', 'Invalid Credentials');

    }

    public function logout()
    {
        Auth::guard('customer')->logout();
//        Session::flush();
        return redirect()->route('index');
    }
}
