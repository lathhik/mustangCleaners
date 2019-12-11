<?php

namespace App\Http\Controllers\Backend;

use App\Models\ItemList;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemListController extends Controller
{
    public function index()
    {
        $services = ServiceType::all();
        $items_lists = ItemList::all();
        return view('backend.pages.items.view-items', compact('items_lists', 'services'));
    }

    public function addItem(Request $request)
    {

        $this->validate($request, [
            'service_type' => 'required',
            'item' => 'required',
            'amount' => 'required'
        ]);

        $item = new ItemList();
        $item->service_type_id = $request->service_type;
        $item->items = $request->item;
        $item->amount = $request->amount;

        if ($item->save()) {
            return redirect()->route('view-items')->with('success', 'Item Successfully Added');
        }

    }

    public function editItem(Request $request, $id)
    {
        $services = ServiceType::all();
        $item = ItemList::find($id);
//        return $services;
//        return $item;

        return view('backend.pages.items.edit-item', compact('item', 'services'));
    }

    public function editItemAction(Request $request, $id)
    {
        $this->validate($request, [
            'service_type' => 'required',
            'item' => 'required',
            'amount' => 'required'
        ]);

        $single_item = ItemList::find($id);

        $single_item->service_type_id = $request->service_type;
        $single_item->items = $request->item;
        $single_item->amount = $request->amount;

        if ($single_item->save()) {
            return redirect()->route('view-items')->with('success', 'Item was Successfully Edited');
        }

    }

    public function deleteItem($id)
    {
        $single_item = ItemList::find($id);

        if ($single_item->delete()) {
            return redirect()->back()->with('success', 'Item was Successfully deleted');
        }
    }
}
