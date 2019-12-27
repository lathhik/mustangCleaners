<?php

namespace App\Http\Controllers\Backend;

use App\Models\Heading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadingController extends Controller
{
    public function viewHeading()
    {
        $headings = Heading::all();
        return view('backend/pages/headings/view-heading', compact('headings'));
    }

    public function addHeading(Request $request)
    {
        $this->validate($request, [
            'heading_span' => 'required',
            'heading_h1' => 'required'
        ]);

        $heading = new Heading();
        $heading->heading_span = $request->heading_span;
        $heading->heading_h1 = $request->heading_h1;

        $heading_count = Heading::all()->count();
//        return $heading_count;

        if ($heading_count >= 3) {
            return redirect()->route('view-heading')->with('fail', 'Cannot Add More Than 3 Headings');
        }
        $heading->save();
        return redirect()->route('view-heading')->with('success', 'Heading Was Successfully Added');


    }

    public function editHeading($id)
    {
        $single_heading = Heading::find($id);
        return view('backend.pages.headings.edit-heading', compact('single_heading'));
    }

    public function editHeadingAction(Request $request, $id)
    {
        $this->validate($request, [
            'heading_span' => 'required',
            'heading_h1' => 'required'
        ]);

        $single_heading = Heading::find($id);
        $single_heading->heading_span = $request->heading_span;
        $single_heading->heading_h1 = $request->heading_h1;

        if ($single_heading->save()) {
            return redirect()->route('view-heading')->with('success', 'Heading Was Successfully Updated');
        }
    }

    public function deleteHeading($id)
    {
        $single_heading = Heading::find($id);
        if ($single_heading) {
            $single_heading->delete();
            return redirect()->back()->with('success', 'Heading Was Successfully Deleted');
        }
    }
}
