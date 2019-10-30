<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order;

class OrderController extends Controller{

    public function getAllOrders()
    {
        $orders = Order::all();
        return view('backend.pages.order.view-order',compact('orders'));
    }
}
