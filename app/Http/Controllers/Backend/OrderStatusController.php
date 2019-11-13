<?php

namespace App\Http\Controllers\Backend;

use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderStatusController extends Controller
{
    public function addOrderStatus()
    {
        return view('backend.pages.order-status.add-order-status');
    }

    public function addOrderStatusAction(Request $request)
    {
        $this->validate($request, [
            'order_status' => 'required|regex:/^[A-Za-z0-9\s]{3,100}$/'
        ]);

        $orderStatus = new OrderStatus();
        $orderStatus->status = $request->order_status;

        if ($orderStatus->save()) {
            return redirect()->route('view-order-status')->with('success', 'Order Status was Successfully added');
        }
    }

    public function viewOrderStatus()
    {
        $order_status = OrderStatus::all();
        return view('backend.pages.order-status.view-order-status')->with('order_status', $order_status);
    }


    public function editOrderStatus($id)
    {
        return 'test';
    }


    public function deleteOrderStatus($id)
    {
        $os = OrderStatus::find($id);

        if ($os->delete()) {
            return redirect()->back()->with('success', 'Order Status was successfully deleted');
        }
    }

}
