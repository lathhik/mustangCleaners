<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\ItemList;
use App\Models\OrderItem;
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


    public function orderDetails(Request $request)
    {
        $order_id = $request->id;

        $customer_order = CustomerOrder::where('id', $order_id)->first();
        $order_items = OrderItem::where('order_id', $order_id)->get();
        $item_id = [];
        $quantity = [];
        foreach ($order_items as $order_item) {
            $item_id[] = $order_item->item_id;
            $quantity[] = $order_item->quantity;
        }

        $items = [];
        foreach ($item_id as $id) {
            $items[] = ItemList::where('id', $id)->first();
        }

//        return response()->json(['items' => $items]);


        $service_type_id = [];
        foreach ($items as $item) {
            $service_type_id[] = $item->service_type_id;

        }
        $service_types = [];
        foreach ($service_type_id as $id) {
            $service_types[] = ServiceType::where('id', $id)->pluck('service_types');
        }

        return response()->json([
            'customer_order' => $customer_order,
            'order_items' => $order_items,
            'item-ids' => $item_id,
            'quantities' => $quantity,
            'items' => $items,
            'service_types' => $service_types,
        ]);
    }

}
