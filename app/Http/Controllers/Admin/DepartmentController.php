<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends AdminController
{
    public function index()
    {
        $pageTitle = 'Departments';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add New Department',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewDepartment'
        ];

        $departments = Department::withTrashed()
            ->latest()
            ->get();

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'departments' => $departments,
        ];

        return view('admin.company-hq.department.index', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:departments',
        ]);

        $department = new Department();
        $department->name = $validatedData['name'];
        $department->status = ($request->status == "on") ? 1 : 0;

        if ($department->save()) {
            Session::flash('successMessage', 'A New department added successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to add new department, Try again!');
    }

    public function show(Department $department)
    {
        //
    }

    public function edit(Department $department)
    {
        return response()->json($department);
    }

    public function update(Request $request, Department $department)
    {
        $validatedData = $request->validate([
            'edit_name' => 'required|unique:departments,name,' . $department->id,
        ]);

        if ($department) {
            $department->name = $validatedData['edit_name'];
            $department->status = ($request->edit_status == "on") ? 1 : 0;
            $department->save();

            Session::flash('successMessage', 'Department record updated successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Invalid data, Try again!');
    }

    public function destroy(Department $department)
    {
        $department = Department::whereId($department)->first();
        if ($department->delete()) {
            Session::flash('successMessage', 'Department has been deleted successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to delete department, Try again!');
    }
}
