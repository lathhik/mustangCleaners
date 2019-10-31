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
        $services = ServiceType::all();
        return view('backend.pages.service.view-service', compact('services'));
    }


    public function addServiceAction(Request $request)
    {
        $this->validate($request, [
            'service_type' => 'required|regex:/^[A-Za-z\s]{3,30}$/'
        ]);

        $service = new ServiceType();

        $service->service_types = $request->service_type;

        if ($service->save()) {
            return redirect()->route('view-service')->with('success', 'Service Type was successfully added');
        }
    }


    public function deleteService($id)
    {
        $serviceType = ServiceType::find($id);

        if ($serviceType->delete()) {
            return redirect()->back()->with('success', 'Service Type was successfully deleted');
        }
    }


    public function editService($id)
    {
        $serviceType = ServiceType::find($id);
        return view('backend.pages.service.edit-service')->with('service', $serviceType);
    }


    public function editServiceAction(Request $request, $id)
    {
        $this->validate($request, [
            'service_type' => 'required|regex:/^[A-Za-z\s]{3,30}$/'
        ]);


        $serviceType = ServiceType::find($id);

        $serviceType->service_types = $request->service_type;

        if ($serviceType->save()) {
            return redirect()->route('view-service')->with('success', 'Service Type was successfully edited');
        }

    }

}
