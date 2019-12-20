<?php

namespace App\Http\Controllers\Backend;

use App\Models\Bag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BagController extends Controller
{
    public function viewBag()
    {
        $bags = Bag::all();
        return view('backend.pages..bags.view-bags', compact('bags'));
    }

    public function addBag(Request $request)
    {
        $this->validate($request, [
            'bag' => 'required'
        ]);

        $bag = new Bag();
        $bag->bags = $request->bag;

        if ($bag->save()) {
            return redirect()->back()->with('success', 'Bag was Successfully added');
        }
    }

    public function editBag($id)
    {
        $bag = Bag::find($id);
        return view('backend.pages.bags.edit-bag', compact('bag'));
    }

    public function editBagAction(Request $request, $id)
    {
        $this->validate($request, [
            'bag' => 'required'
        ]);

        $bag = Bag::find($id);
        $bag->bags = $request->bag;

        if ($bag->save()) {
            return redirect()->route('view-bags')->with('success', 'Bag Was Successfully Edited');
        }

    }

    public function deleteBag($id)
    {
        $bag = Bag::find($id);

        if ($bag) {
            $bag->delete();
        }

        return redirect()->back()->with('success', 'Bag was Successfully Deleted');
    }
}
