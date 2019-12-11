<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\ItemList;
use App\Models\OrderStatus;
use App\Models\ServiceType;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    public function getAllOrders()
    {

        $pickup_orders = CustomerOrder::with('pickUpAddress', 'deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', '<', 3);
        })->get();

        $delivery_orders = CustomerOrder::with('pickUpAddress', 'deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', '>', 3);
        })->get();

        $laundry_orders = CustomerOrder::with('pickUpAddress', 'deliveryAddress')->whereHas('orderStatus', function ($q) {
            $q->where('identifier', 3);
        })->get();

        $order_status = OrderStatus::all();

        return view('backend.pages.order.view-order', compact('orders',
            'order_status',
            'laundry_orders',
            'pickup_orders',
            'delivery_orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {

        $customer_orders = CustomerOrder::find($id);

        $identi = $customer_orders->orderStatus->identifier;
        $identi++;
        $order_status_id = OrderStatus::where('identifier', $identi)->first()->id;
        $customer_orders->order_status_id = $order_status_id;


        if ($order_status_id == 5) {
            $customer_orders->final_status = 'completed';
        }
        $customer_orders->save();
        return redirect()->route('view-orders');
    }

    public function deliveryTime(Request $request)
    {
        $delivery_date = $request->delivery_date;
        $delivery_time_from = $request->delivery_time_from;
        $delivery_time_to = $request->delivery_time_to;
        $order_id = $request->id;
        $customer_order = CustomerOrder::find($request->id);
        $customer_order->delivery_time_from = $delivery_time_from;
        $customer_order->delivery_time_to = $delivery_time_to;
        $customer_order->delivery_date = $delivery_date;

        $customer_order->save();

        return response()->json(['delivery_time_form' => $delivery_time_from, 'delivery_time_to' => $delivery_time_to, 'delivery_date' => $delivery_date, 'order_id' => $order_id]);
    }

}
