<?php

namespace App\Http\Controllers\Frontend;

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
        return view('frontend.pages.order');
    }

}
