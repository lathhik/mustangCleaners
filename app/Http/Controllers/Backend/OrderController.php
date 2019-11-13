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

        $pickup_orders = CustomerOrder::with('pickUpAddress','deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', '<', 3);
        })->get();

        $delivery_orders = CustomerOrder::with('pickUpAddress','deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', '>', 3);
        })->get();

        $laundry_orders = CustomerOrder::with('pickUpAddress','deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', 3);
        })->get();

        $order_status = OrderStatus::all();

        return view('backend.pages.order.view-order', compact('orders',
            'order_status',
            'laundry_orders',
            'pickup_orders',
            'delivery_orders'));
    }

    public function updateOrderStatus($id)
    {
        $customer_orders = CustomerOrder::find($id);

        $identi = $customer_orders->orderStatus->identifier;
        $identi++;
        $order_status_id = OrderStatus::where('identifier', $identi)->first()->id;
        $customer_orders->order_status_id = $order_status_id;
        $customer_orders->save();
        return redirect()->route('view-orders');
    }
}
