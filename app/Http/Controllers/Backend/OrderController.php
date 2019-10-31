<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;

class OrderController extends Controller
{

    public function getAllOrders()
    {
        $orders = CustomerOrder::all();
        return view('backend.pages.order.view-order', compact('orders'));

    }
}
