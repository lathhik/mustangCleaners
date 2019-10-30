<?php

namespace App\Http\Controllers\Backend;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceTypeController extends Controller
{
    public function addService()
    {
        return view('backend.pages.service.add-service');
    }

    public function viewService()
    {
        return view('backend.pages.service.view-service');
    }


    public function addServiceAction(Request $request)
    {
        $this->validate($request, [
            'service_type' => 'required|regex:/^[A-Za-z\s]{3,30}$/'
        ]);

        $service = new ServiceType();

        $service->service_types = $request->service_type;

        if ($service->save()){
            return redirect()->route('view-service')->with('success','Service Type was successfully added');
        }
    }

}
