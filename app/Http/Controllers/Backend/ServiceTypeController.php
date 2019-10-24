<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceTypeController extends Controller
{
    public function addService()
    {
        return view('backend.pages.service.add-service');
    }

    public function viewService(){
        return view('backend.pages.service.view-service');
    }

}
