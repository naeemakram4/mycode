<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_id' => 'required|not_in:0',
            'name' => 'required|unique:designations',
        ]);

        $designation = new Designation;
        $designation->department()->associate($validatedData['department_id']);
        $designation->name = $request->name;
        $designation->status = ($request->status == "on") ? 1 : 0;

        if ($designation->save()) {
            Session::flash('successMessage', 'A new designation added successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to create new designation, Try again!');
    }

    public function edit(Designation $designation)
    {
        return response()->json($designation);
    }

    public function update(Request $request, Designation $designation)
    {
        $validatedData = $request->validate([
            'edit_department_id' => 'required|not_in:0',
            'edit_name' => 'required|unique:designations,name,' . $designation->id,
        ]);

        if ($designation) {
            $designation->department()->associate($validatedData['edit_department_id']);
            $designation->name = $validatedData['edit_name'];
            $designation->status = ($request->edit_status == "on") ? 1 : 0;
            $designation->save();

            Session::flash('successMessage', 'Designation updated successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Invalid data, Try again!');
    }

    public function destroy(Designation $designation)
    {
        if ($designation->delete()) {
            Session::flash('successMessage', 'Designation deleted successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to delete designation, Try again!');
    }
}
