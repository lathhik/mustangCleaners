<?php

namespace App\Http\Controllers\Frontend;


use App\Models\CustomerOrder;
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
        $orders = CustomerOrder::all();
        return view('frontend.pages.dashboard',compact('orders'));
    }

    public function viewOrderPage()
    {
        $services = ServiceType::all();
        return view('frontend.pages.order')->with('services', $services);
    }

}
