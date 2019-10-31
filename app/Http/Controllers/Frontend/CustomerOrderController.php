<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Order;
use App\Models\CustomerOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerOrderController extends Controller
{

    public function customerOrder(Order $request)
    {

//        $this->validate($request, [
//            'pickup_street_addr' => 'required',
//            'pickup_house_no' => 'required',
//            'deli_street_addr' => 'required',
//            'deli_house_no' => 'required',
//            'service_type' => 'required',
//            'phone' => 'required',
//            'pickup_date' => 'required',
//            'pickup_time' => 'required',
//            'deli_date' => 'required|after:tomorrow',
//            'deli_time' => 'required'
//        ]);


//        Validator::make($request->all(), [
//            'pickup_street_addr' => 'required',
//            'pickup_house_no' => 'required',
//            'deli_street_addr' => 'required',
//            'deli_house_no' => 'required',
//            'service_type' => 'required',
//            'phone' => 'required',
//            'pickup_date' => 'required',
//            'pickup_time' =>    'required',
//            'deli_date' => 'required',
//            'deli_time' => 'required'
//        ])->validate();

        $deli_date = Carbon::parse($request->pickup_date)->addDays(2)->toDateString();
//
//        if ($deli_date<$request->deli_date) {
////            $validator->errors()->add('deli_date', 'Delivery date is two days more from pick up date');
//            return session()->put('error','The delivery date should be at least 2 days further');
//        }



        $orders = new CustomerOrder();

        $orders->customer_id = Auth::guard('customer')->user()->id;
        $orders->order_status_id = 1;
        $orders->service_type = $request->service_type;
        $orders->pickup_street_address = $request->pickup_street_addr;
        $orders->pickup_house_no = $request->pickup_house_no;
        $orders->delivery_street_address = $request->deli_street_addr;
        $orders->delivery_house_no = $request->deli_house_no;
        $orders->pickup_date = $request->pickup_date;
        $orders->pickup_time = $request->pickup_time;
        $orders->delivery_date = $request->deli_date;
        $orders->delivery_time = $request->deli_time;
        $orders->phone = $request->phone;


        if ($orders->save()){
            return redirect()->back()->with('success','Your Order Was Successfully Placed. Please View Your Dashboard.');
        }

    }

}
