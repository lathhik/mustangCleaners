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

        if ($cart) {
            $quantity = $cart->quantity;
        } else {
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
        $service_type = $item->serviceType->service_types;
        $cart = Cart::updateOrCreate(
            ['user_id' => Auth::guard('customer')->id, 'item_id' => $id],
            ['quantity' => $quantity, 'total' => $quantity * $item_amount]
        );
        return response()
            ->json(['item' => $item, 'quantity' => $quantity,
                'cart' => $cart, 'service_type' => $service_type]);
    }

    public function deleteItemCart(Request $request)
    {
        $id = $request->id;
        $item_cart = Cart::find($id);
        $item_cart->delete();
        return response()->json(['success' => "deleted", 'item' => $item_cart]);
    }

    public function updateItemCart(Request $request)
    {
        $cart_id = $request->cart_id;
        $item_id = $request->item_id;
        $item = ItemList::find($item_id);

        $service_type_id = $item->service_type_id;
        $service_type = ServiceType::find($service_type_id);

        $item_cart = Cart::find($cart_id);

        return response()->json(['item' => $item, 'service_type' => $service_type->service_types, 'cart' => $item_cart]);
    }
}
