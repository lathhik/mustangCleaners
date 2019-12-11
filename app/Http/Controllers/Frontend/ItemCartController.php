<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ItemList;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemCartController extends Controller
{

    public function addItemCart(Request $request)
    {
        $id = $request->id;
        $items_details = ItemList::find($id);
        $service_type_id = $items_details->service_type_id;
        $service_type = ServiceType::find($service_type_id);

        return response()->json(['item_details' => $items_details, $service_type->service_types]);
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $item = ItemList::find($id);

        $service_type = ServiceType::where('id', $item->service_type_id)->first();

        if (!$item) {
            abort(404);
        }
        $cart = session()->get('cart');

        $amt2 = 0;
        $amt= 0;

        if (!$cart) {
            $cart = [
                $id => [
                    'service_type' => $service_type->service_types,
                    'item_name' => $item->items,
                    'quantity' => $quantity,
                    'item_amount' => $item->amount,
                    'total_amount' => $quantity * $item->amount,
                    'grand_total'=>$item->amount
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back();
        }
        if (isset($cart[$id])) {
            $cart = [
              $id=>[
                  'service_type' => $service_type->service_types,
                  'item_name' => $item->items,
                  'quantity' => $quantity,
                  'item_amount' => $item->amount,
                  'total_amount' => $quantity * $item->amount,
                  'grand_total'=>$amt2,
              ]
            ];
            session()->put('cart', $cart);

            foreach (session('cart') as $id => $value){
                $amt = $value['total_amount'];
                $amt2 += $amt;
            }

            return response()->json(['cart', $cart]);
        }
        $cart[$id] = [
            'service_type' => $service_type->service_types,
            'item_name' => $item->items,
            'quantity' => $quantity,
            'item_amount' => $item->amount,
            'total_amount' => $quantity * $item->amount,
            'grand_total'=>$amt2
        ];

        foreach (session('cart') as $id => $value){
            $amt = $value['total_amount'];
            $amt2 += $amt;
        }

        session()->put('cart', $cart);


        return response()->json(['item' => $item, 'quantity' => $quantity, $cart,'amt'=> $amt2]);
    }
}
