<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin()
    {
        return view('');
    }

    public function addAdmin()
    {
        return view('backend.admin.add-admin');
    }

    public function addAdminAction(Request $request)
    {

    }

}
