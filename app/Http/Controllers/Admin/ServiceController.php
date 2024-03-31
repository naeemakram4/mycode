<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index()
    {
        $pageTitle = 'Service';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add Service',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewService'
        ];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'services' => Service::withCount('clients', 'leadManagements')->latest()->get()
        ];

        return view('admin.service.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|string'
        ]);

        $service = new Service();
        $service->label = ucfirst($validatedData['label']);
        $service->name = lcfirst(str_replace(' ', '_', $validatedData['label']));
        $service->description = $request->description;

        if ($service->save()) {
            Session::flash('successMessage', 'Service has been added successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to create new service, Try again!');
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(Service $service)
    {
        //
    }

    public function update(Request $request, Service $service)
    {
        //
    }

    public function destroy(Service $service)
    {
        //
    }
}
