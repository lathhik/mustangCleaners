<?php

namespace App\Http\Controllers\Backend;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Image as Images;

class ImageController extends Controller
{
    public function viewImage()
    {
        $images = Images::all();
        return view('backend.pages.images.view-image', compact('images'));
    }

    public function addImage(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image',
            'location' => 'required',
            'priority' => 'required'
        ]);

        $image = new Images();
        $image->location = $request->location;

        if ($request->location == 'HI' && $request->priority == 1) {
            $priority_count = Images::where(function ($q) {
                $q->where('priority', 1)
                    ->where('location', 'HI');
            })->count();
            if ($priority_count >= 3) {
                return redirect()->back()->with('fail', 'Already set a maximum priority');
            }
        }

        $image->priority = $request->priority;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_name = str_random(20) . '.' . $file->getClientOriginalExtension();

            $make_image = Image::make($file);

            if (!file_exists(public_path('custom/backend/images/front_image'))) {
                mkdir(public_path('custom/backend/images/front_image'));
            }

            if ($request->location == 'HI') {
                $make_image->resize(1920, 875)->save(public_path('custom/backend/images/front_image/' . $new_name));
            } elseif ($request->location == 'AI') {
                $make_image->resize(1920, 450)->save(public_path('custom/backend/images/front_image/' . $new_name));
            } else {
                $make_image->resize(1920, 450)->save(public_path('custom/backend/images/front_image/' . $new_name));
            }

            $image->images = $new_name;

        }

        if ($image->save()) {
            return redirect()->route('view-image')->with('success', 'Image was successfully added');
        }
    }


    public function editImage($id)
    {
        $single_image = Images::find($id);
        return view('backend/pages/images/edit-image', compact('single_image'));
    }


    public function editImageAction(Request $request, $id)
    {

        $this->validate($request, [
            'location' => 'required'
        ]);

        $single_image = Images::find($id);
        $single_image->location = $request->location;

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image'
            ]);


            $file = $request->file('image');
            $new_name = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (file_exists(public_path('custom/backend/images/front_image/' . $single_image->images))) {
                unlink(public_path('custom/backend/images/front_image/' . $single_image->images));
            }

            if ($request->location == 'HI') {
                $image->resize(1920, 875)->save(public_path('custom/backend/images/front_image/' . $new_name));
            } elseif ($request->location == 'AI') {
                $image->resize(1920, 450)->save(public_path('custom/backend/images/front_image/' . $new_name));
            } else {
                $image->resize(1920, 450)->save(public_path('custom/backend/images/front_image/' . $new_name));
            }

            $single_image->images = $new_name;
            if ($single_image->save()) {
                return redirect()->route('view-image')->with('success', 'Image was successfully updated');
            }
        }

        if ($single_image->save()) {
            return redirect()->route('view-image')->with('success', 'Image was successfully updated');
        }

    }


    public function updateImagePriority($id)
    {
        $single_image = Images::find($id);
        $loc = $single_image->location;
        $priority = $single_image->priority;

        switch ($loc) {
            case 'HI':
                if ($priority == 1) {
                    $single_image->priority = 0;
                    if ($single_image->save()) {
                        return redirect()->back()->with('success', 'Image Priority is Successfully Updated');
                    }
                } else {
                    $priority_count = Images::where(function ($q) {
                        $q->where('priority', 1)
                            ->where('location', 'HI');
                    })->count();

                    if ($priority_count >= 3) {
                        return redirect()->back()->with('fail', 'Already set a maximum priority');
                    }
                }
                break;
            case 'AI':
                if ($priority == 1) {
                    $single_image->priority = 0;
                    if ($single_image->save()) {
                        return redirect()->back()->with('success', 'Image Priority is Successfully Updated');
                    }

                } else {
                    $priority_count = Images::where(function ($q) {
                        $q->where('priority', 1)
                            ->where('location', 'AI');
                    })->count();

                    if ($priority_count >= 1) {
                        return redirect()->back()->with('fail', 'Already set a maximum priority');
                    }
                }
                break;
            case 'CI':
                if ($priority == 1) {
                    $single_image->priority = 0;
                    if ($single_image->save()) {
                        return redirect()->back()->with('success', 'Image Priority is Successfully Updated');
                    }
                } else {
                    $priority_count = Images::where(function ($q) {
                        $q->where('priority', 1)
                            ->where('location', 'CI');
                    })->count();

                    if ($priority_count >= 1) {
                        return redirect()->back()->with('fail', 'Already set a maximum priority');
                    }
                }
        }

        if ($single_image->priority == 1) {
            $single_image->priority = 0;
        } else {
            $single_image->priority = 1;
        }
        if ($single_image->save()) {
            return redirect()->back()->with('success', 'Image Priority is Successfully Updated');
        }
    }


    public
    function deleteImage($id)
    {
        $image = Images::find($id);

        if (file_exists(public_path('custom/backend/images/front_image/' . $image->images))) {
            unlink(public_path('custom/backend/images/front_image/' . $image->images));
        }

        if ($image->delete()) {
            return redirect()->back()->with('success', 'Image was successfully deleted');
        }
    }
}
