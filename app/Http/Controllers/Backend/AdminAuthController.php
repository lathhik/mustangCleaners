<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;


    public function index()
    {
        return view('backend.admin-login');
    }

    public function loginAction(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = [];
        $admin['email'] = $request->email;
        $admin['password'] = $request->password;

        $remember_me = false;

        if ($request->input('remember_me')) {
            $remember_me = true;
        }

        if (Auth::guard('admin')->attempt($admin, $remember_me)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('fail', 'Invalid Credentials');


    }

    public function logOut()
    {
        Auth::guard('admin')->logout();
//        Session::flush();
        return redirect()->route('admin-login');
    }
}
