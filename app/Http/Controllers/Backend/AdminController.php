<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin()
    {
        return view('backend.pages.admin.view-admin');
    }

    public function addAdmin()
    {
        return view('backend.pages.admin.add-admin');
    }

    public function addAdminAction(Request $request)
    {

    }

}
