<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Employee';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add New Employee',
            'route' => 'javascript:void(0);',
            'data' => 'data-bs-toggle=modal data-bs-target=#addNewTeam'
        ];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'action' => $action,
            'clients' => Client::all(),
            'employees' => Employee::with('department', 'designation')->latest()->get(),
        ];

        return view('admin.company-hq.employee.index', $viewParams);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'user_name' => 'required|unique:users,user_name',
            'email' => 'required|unique:users,email',
            'phone' => 'nullable',
            'clients' => 'required|array',
            'password' => 'required'
        ]);

        $user = new User;
        $user->role_id = Role::EMPLOYEE_ROLE;
        $user->user_name = $validatedData['user_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->status = ($request->status == "on") ? 'Active' : 'Inactive';
        $user->save();

        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->name = $validatedData['name'];
        $employee->email = $validatedData['email'];
        $employee->phone = $validatedData['phone'];
        $employee->remarks = $request->remarks;
        $employee->status = ($request->status == "on") ? 1 : 0;

        if ($employee->save()) {
            $employee->clients()->sync($validatedData['clients']);

            Session::flash('successMessage', 'A new employee has been created successfully!');
            return redirect()->back();
        }

        return redirect()->back()
            ->withErrors('Failed to create new employee, Try again!');
    }

    public function show(Employee $employee)
    {
        //
    }

    public function edit(Employee $employee)
    {
        return response()->json($employee);
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'edit_name' => 'required',
            'edit_email' => 'required|unique:employees,email,' . $employee->id,
            'edit_phone' => 'nullable',
        ]);

        $user = User::where('id', $employee->user_id)->first();

        if ($user && $employee) {
            $user->email = $validatedData['edit_email'];
            $user->status = ($request->edit_status == "on") ? 1 : 0;
            if ($request->has('edit_password') && $request->edit_password != null) {
                $user->password = Hash::make($request->edit_password);
            }
            $user->save();

            $employee->name = $validatedData['edit_name'];
            $employee->email = $validatedData['edit_email'];
            $employee->phone = $validatedData['edit_phone'];
            $employee->department()->associate($validatedData['edit_department']);
            $employee->designation()->associate($validatedData['edit_designation']);
            $employee->remarks = $request->edit_remarks;
            $employee->status = ($request->edit_status == "on") ? 1 : 0;

            if ($employee->save()) {
                Session::flash('successMessage', 'Employee has been updated successfully!');
                return redirect()->back();
            }
        }

        return redirect()->back()
            ->withErrors('Invalid data, Try again!');
    }

    public function destroy(Employee $employee)
    {
        //
    }
}
