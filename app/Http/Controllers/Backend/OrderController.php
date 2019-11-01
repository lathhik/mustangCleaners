<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    public function getAllOrders()
    {
        $orders = CustomerOrder::all();
        $order_status = OrderStatus::all();
        return view('backend.pages.order.view-order', compact('orders','order_status'));
    }

    public function updateOrderStatus($id)
    {
        $orders_status = OrderStatus::all();
    }
}
