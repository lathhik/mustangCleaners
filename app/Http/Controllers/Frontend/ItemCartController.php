<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\ItemList;
use App\Models\ServiceType;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemCartController extends Controller
{

    public function addItemCart(Request $request)
    {
        $id = $request->id;
        $items_details = ItemList::find($id);
        $service_type_id = $items_details->service_type_id;
        $service_type = ServiceType::find($service_type_id);

        $cart = Cart::where('item_id', $items_details->id)->first();
        if($cart){
            $quantity = $cart->quantity;
        }else{
            $quantity = 1;
        }
        return response()->json(['item_details' => $items_details, 'service_type' => $service_type->service_types, 'quantity' => $quantity]);
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $item = ItemList::find($id);
        $item_amount = $item->amount;

        $service_type = ServiceType::where('id', $item->service_type_id)->first();
        $service_type = $service_type->service_types;

        $cart = Cart::all();
        if (!$cart) {
            abort(404);
        }

        if (empty($cart)) {
            $cart = new Cart();
            $cart->item_id = $id;
            $cart->user_id = Auth::guard('customer')->user()->id;
            $cart->quantity = $quantity;
            $cart->total = $quantity * $item_amount;
            $cart->save();

            return response()->json(['cart' => $cart, 'item' => $item, 'service_type' => $service_type]);
        }


        $cart_with_id = Cart::find($id);
        if ($cart_with_id) {
            $cart_with_id->item_id = $id;
            $cart_with_id->user_id = Auth::guard('customer')->user()->id;
            $cart_with_id->quantity = $quantity;
            $cart_with_id->total = $quantity * $item_amount;

            $cart_with_id->save();

            return response()->json(['cart' => $cart_with_id, 'item' => $item, 'service_type' => $service_type, 'quantity' => $quantity]);
        }

        $cart = new Cart();
        $cart->item_id = $id;
        $cart->user_id = Auth::guard('customer')->user()->id;
        $cart->quantity = $quantity;
        $cart->total = $quantity * $item_amount;

        $cart->save();

        $cart = Cart::find($id);

        return response()->json(['item' => $item, 'quantity' => $quantity, 'cart' => $cart, 'service_type' => $service_type]);
    }
}
