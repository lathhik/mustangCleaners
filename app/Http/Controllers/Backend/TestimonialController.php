<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function viewTesti()
    {
        $testimonials = Testimonial::all();
        return view('backend.pages.testi.view-testi', compact('testimonials'));
    }

    public function addTestiAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'testimonial' => 'required',
            'priority' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('testi-validation-error')->withErrors($validator)->withInput();
        }

        $testimonial = new  Testimonial();
        $testimonial->full_name = $request->full_name;
        $testimonial->email = $request->email;
        $testimonial->address = $request->address;
        $testimonial->occupation = $request->occupation;
        $testimonial->testimonials = $request->testimonial;
        $testimonial->priority = $request->priority;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_name = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (!file_exists(public_path('custom/backend/images/testimonial'))) {
                mkdir(public_path('custom/backend/images/testimonial'));
            }

            $image->resize(77, 77)->save(public_path('custom/backend/images/testimonial/' . $new_name));
        }

        $testimonial->image = $new_name;

        if ($testimonial->save()) {
            return redirect()->route('view-testimonial')->with('success', 'Testimonial Successfully Added');
        }
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);

        if ($testimonial) {
            $testimonial->delete();
        }

        return redirect()->route('view-testimonial')->with('success', 'Testimonial Successfully deleted');
    }

    public function editTesti($id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.pages.testi.edit-testi', compact('testimonial'));
    }

    public function editTestiAction(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'testimonial' => 'required',
            'priority' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('testi-validation-error')->withErrors($validator)->withInput();
        }
        $testimonial = Testimonial::find($id);
        $testimonial->full_name = $request->full_name;
        $testimonial->email = $request->email;
        $testimonial->address = $request->address;
        $testimonial->occupation = $request->occupation;
        $testimonial->testimonials = $request->testimonial;
        $testimonial->priority = $request->priority;

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image'
            ]);
            $file = $request->file('image');
            $new_name = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (!file_exists(public_path('custom/backend/images/testimonial'))) {
                mkdir(public_path('custom/backend/images/testimonial'));
            }
            $image->resize(77, 77)->save(public_path('custom/backend/images/testimonial/' . $new_name));
            $testimonial->image = $new_name;
            if ($testimonial->save()) {
                return redirect()->route('view-testimonial')->with('success', 'Successfully Edited');
            }
        }
        if ($testimonial->save()) {
            return redirect()->route('view-testimonial')->with('success', 'Successfully Edited');
        }
    }
}
