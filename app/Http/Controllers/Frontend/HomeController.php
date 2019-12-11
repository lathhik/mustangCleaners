<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Cart;
use App\Models\CustomerOrder;
use App\Models\ItemList;
use App\Models\ServiceType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        return view('frontend.pages.dashboard', compact('orders'));
    }

    public function viewOrderPage()
    {
        $services = ServiceType::all();
        $carts = Cart::all();

        return view('frontend.pages.order', compact('services', 'laundry_service_type_items', 'dryclean_service_type_items', 'carts'));
    }

}
