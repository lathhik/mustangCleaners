<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{


    public function viewAdmin()
    {
        $admins = Admin::all();

        return view('backend.pages.admin.view-admin')->with('admins', $admins);
    }

    public function addAdmin()
    {
        return view('backend.pages.admin.add-admin');
    }

    public function addAdminAction(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3|max:20|alpha',
            'last_name' => 'required|min:3|max:20|alpha',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|confirmed',
            'address' => 'required|regex:/^[A-Za-z0-9\s]{3,30}$/',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'gender' => 'required',
            'image' => 'required|image'
        ]);

        $admin = new Admin();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->address = $request->address;
        $admin->gender = $request->gender;
        $admin->contact = $request->contact;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file);

            if (!file_exists(public_path('custom/backend/images/admins'))) {
                mkdir(public_path('custom/backend/images/admins'));
            }

            $image->resize(300, null)->save(public_path('custom/backend/images/admins/' . $newName));

        }
        $admin->image = $newName;

        if ($admin->save()) {
            return redirect()->route('view-admin')->with('success', 'Admin was Added Successfully');
        }
        return redirect()->back()->with('fail', 'There was some problem');
    }


    public function editAdmin($id)
    {
        $admin = Admin::find($id);

        return view('backend.pages.admin.edit-admin')->with('admin', $admin);
    }

    public function editAdminAction(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3|max:20|alpha',
            'last_name' => 'required|min:3|max:20|alpha',
            'address' => 'required|min:3|max:20|alpha',
            'contact' => 'required|min:5|max:17|numeric',
            'gender' => 'required',
        ]);

        $admin = Admin::find($id);
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->address = $request->address;
        $admin->contact = $request->contact;
        $admin->gender = $request->gender;

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image'
            ]);

            $file = $request->file('image');
            $newName = str_random(20) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file);

            if (file_exists(public_path('custom/backend/images/admins/' . $admin->image))) {
                unlink(public_path('custom/backend/images/admins/' . $admin->image));
            }

            $image->resize(300, null)->save(public_path('custom/backend/images/admins/' . $newName));

            $admin->image = $newName;

            if ($admin->save()) {
                return redirect()->route('view-admin')->with('success', 'Admin was updated successfully');
            }
            return redirect()->back()->with('fail', 'There was some problem');
        }
        if ($admin->save()) {
            return redirect()->route('view-admin')->with('success', 'Admin was updated successfully');
        }
        return redirect()->back()->with('fail', 'There was some problem');
    }

    public function deleteAdmin($id)
    {
        $admin = Admin::find($id);

        if (file_exists(public_path('custom/backend/images/admins/' . $admin->image))) {
            unlink(public_path('custom/backend/images/admins/' . $admin->image));
        }

        if ($admin->delete()) {
            return redirect()->back()->with('success', 'Admin was deleted successfully');
        }
        return redirect()->back()->with('fail', 'There was some problem');
    }

}


