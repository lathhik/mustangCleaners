<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }


    public function viewOrderPage()
    {
        $services = ServiceType::all();
        return view('frontend.pages.order')->with('services', $services);
    }

}
