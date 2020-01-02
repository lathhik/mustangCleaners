<?php

namespace App\Http\Controllers\Backend;

use App\Mail\PasswordResetMail;
use App\Models\Admin;
use App\Models\AdminPasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class AdminPasswordResetController extends Controller
{
    use SendsPasswordResetEmails;

    public function showResetForm()
    {
        return view('backend.mail.admin-email');
    }


    public function adminEmail(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return redirect()->back()->with('fail', 'Invalid Email');
        }

        $admin_pass_reset = new AdminPasswordReset();
        $str_random_token = str_random(60);
        $admin_pass_reset->token = $str_random_token;
        $admin_pass_reset->email = $request->email;

        $admin_pass_reset->save();

        $token_data = AdminPasswordReset::where('email', $request->email)->first();

        $mail = $this->sendResetEmail($token_data->email, $token_data->token);

        if ($mail) {
            return redirect()->back()->with('success', 'Please check your email to reset your password');
        }
        return redirect()->back()->with('fail', 'Something went wrong');

    }


    private function sendResetEmail($email, $token)
    {
        $admin = Admin::where('email', $email)->select('email')->first();

        $link = route('password-reset', $token) . '?email=' . urlencode($admin->email);

        try {
            Mail::to($admin->email)->send(new PasswordResetMail($link));
            return true;
        } catch (\Exception $e) {
            return 'Error';
        }
    }

    public function passwordReset(Request $request, $token)
    {
        return view('backend.mail.password-reset')->with('token', $token);
    }

    public function resetAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:admins,email',
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $password = $request->password;

        $token = AdminPasswordReset::where('token', $request->token)->first();

        if (!$token) return redirect()->route('reset-password-email');

        $admin = Admin::where('email', $token->email)->first();

        if (!$admin) return redirect()->back()->with('fail', 'Email Not Found');

        $admin->password = Hash::make($password);

        $admin->save();

        Auth::login($admin);

        AdminPasswordReset::where('email', $admin->email)->delete();

        return redirect()->route('admin-login')->with('success','Password was successfully reset. Please Login with new password');
    }
}
