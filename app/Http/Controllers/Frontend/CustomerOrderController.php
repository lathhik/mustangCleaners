<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Order;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerOrderController extends Controller
{

    public function customerOrder(Order $request)
    {
//        return $request->all();
        $customer_id = Auth::guard('customer')->user()->id;


//        $pickup_address = new Address();
//        $pickup_address->address_line_1 = $request->input("pickup_address_line_1");
//        $pickup_address->address_line_2 = $request->input("pickup_address_line_2");
//        $pickup_address->city = $request->input("pickup_city");
//        $pickup_address->state = $request->input("pickup_state");
//        $pickup_address->zip = $request->input("pickup_zip");
//        $pickup_address->save();
//        if ($request->input("delivery_address")) {
//            $delivery_address_id = $pickup_address->id;
//        } else {
//            $delivery_address = new Address();
//            $delivery_address->address_line_1 = $request->input("delivery_address_line_1");
//            $delivery_address->address_line_2 = $request->input("delivery_address_line_2");
//            $delivery_address->city = $request->input("delivery_city");
//            $delivery_address->state = $request->input("delivery_state");
//            $delivery_address->zip = $request->input("delivery_zip");
//            $delivery_address->save();
//            $delivery_address_id = $delivery_address->id;
//        }
//        $deli_date = Carbon::parse($request->pickup_date)->addDays(2)->toDateString();

        $orders = new CustomerOrder();
        $orders->customer_id = Auth::guard('customer')->user()->id;
        $orders->order_status_id = 1;
        $orders->pickup_address_id = Auth::guard('customer')->user()->address_id;
        $orders->delivery_address_id = Auth::guard('customer')->user()->address_id;;
        $orders->pickup_time_from = $request->pickup_time_from;
        $orders->pickup_time_to = $request->pickup_time_to;
        $orders->pickup_date = $request->pickup_date;

        if ($orders->save()) {
            $carts = Cart::where('user_id', $customer_id)->get();

            foreach ($carts as $cart) {
                $order_item = new OrderItem();
                $order_item->item_id = $cart->item_id;
                $order_item->order_id = $orders->id;
                $order_item->quantity = $cart->quantity;
                $order_item->total = $cart->total;

                $order_item->save();
                $cart->delete();
            }
            return redirect()->route('customer-dashboard')->with('success', 'Your Order Was Successfully Placed. Please View Your Dashboard.');
        }


    }

}
