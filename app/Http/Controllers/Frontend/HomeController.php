<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Cart;
use App\Models\CustomerOrder;
use App\Models\ItemList;
use App\Models\OrderItem;
use App\Models\ServiceType;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function dashboard()
    {
        $id = Auth::guard('customer')->user()->id;
        $orders = CustomerOrder::with('customer')->where('customer_id', '=', $id)->get();
        $order = CustomerOrder::where('customer_id', '=', $id)->first();

        return view('frontend.pages.dashboard', compact('orders'));
    }

    public function viewOrderPage()
    {
        $services = ServiceType::all();
        $carts = Cart::all();
        return view('frontend.pages.order', compact('services', 'laundry_service_type_items', 'dryclean_service_type_items', 'carts'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }


    public function message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('message_error')->withErrors($validator)->withInput();
        }

        $message = new Message();
        $message->full_name = $request->full_name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->phone = $request->phone;
        $message->messages = $request->message;

        if ($message->save()) {
            return redirect()->route('message_error')->with('success', 'Your Message was Successfully sent');
        }
    }

}
