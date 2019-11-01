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
        $orders_status = OrderStatus::all();

//        foreach ($orders as $order){
//
//            return $order->orderStatus->status;
//        }

        $id = null;
        foreach ($orders_status as $os) {
            $id = $os->id + 1;
            break;
        }

        $orderAction = DB::table('orders_status')->where('id', '=', $id)->value('status');

        return view('backend.pages.order.view-order', compact('orders', 'orderAction'));

    }

    public function status($id)
    {
        $order = CustomerOrder::find($id);

        $orderStatusId = $order->order_status_id + 1;

        if ($orderStatusId > 6){
            return redirect()->back();
        }

        $order->order_status_id = $orderStatusId;

        $order->update();
        return redirect()->back();
    }
}
