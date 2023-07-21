<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $pageTitle = 'Designation';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add New Designation',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewDesignation'
        ];

        $designations = Designation::with('department')
            ->latest()
            ->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'designations' => $designations,
            'departments' => Department::whereStatus(1)->get()
        ];

        return view('admin.company-hq.designation.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Designation $designation)
    {
        //
    }

    public function edit(Designation $designation)
    {
        //
    }

    public function update(Request $request, Designation $designation)
    {
        //
    }

    public function destroy(Designation $designation)
    {
        //
    }
}
