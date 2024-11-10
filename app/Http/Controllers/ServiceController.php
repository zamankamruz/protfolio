<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'icon_class' => 'required',
            'description' => 'required',
        ]);

        Service::create($request->all());
        return redirect()->route('admin.add_service')->with('success', 'Service created successfully.');
    }

    public function update(Request $request, Service $service) {
        $request->validate([
            'title' => 'required',
            'icon_class' => 'required',
            'description' => 'required',
        ]);
    
        $service->update($request->all());
        return redirect()->route('admin.list_service')->with('success', 'Service updated successfully.');
    }


    public function destroy(Service $service) {
        $service->delete();
        return redirect()->route('admin.list_service')->with('success', 'Service deleted successfully.');
    }
}
