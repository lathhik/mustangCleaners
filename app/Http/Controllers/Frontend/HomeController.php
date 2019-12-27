<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Cart;
use App\Models\CustomerOrder;
use App\Models\Heading;
use App\Models\Image;
use App\Models\ServiceType;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('priority', 1)->get();
        $home_images = Image::where(function ($query) {
            $query->where('priority', 1)
                ->where('location', 'HI');
        })->get();
        $headings = Heading::all();
        return view('frontend.pages.home', compact(
            'testimonials',
            'home_images',
            'headings'));
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
        $testimonials = Testimonial::where('priority', 1)->get();
        $about_image = Image::where(function ($query) {
            $query->where('priority', 1)
                ->where('location', 'AI');
        })->first();

        return view('frontend.pages.about', compact('about_image', 'testimonials'));
    }

    public function contact()
    {
        $contact_image = Image::where(function ($query) {
            $query->where('priority', 1)
                ->where('location', 'CI');
        })->first();

        return view('frontend.pages.contact', compact('contact_image'));
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
