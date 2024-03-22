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
use App\Traits\FileHandling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    use FileHandling;

    public function index()
    {
        $pageTitle = 'Employee';
        $breadcrumbs = [['text' => $pageTitle]];
        $action = [
            'text' => 'Add New Employee',
            'route' => route('admin.employee.create'),
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
        $pageTitle = 'Create Employee';
        $breadcrumbs = [['text' => 'Employees', 'url' => '\admin\employee'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'clients' => Client::all(),
        ];

        return view('admin.company-hq.employee.create', $viewParams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name',
            'email' => 'required|unique:users,email',
            'phone' => 'nullable',
            'clients' => 'required|array',
            'password' => 'required'
        ]);

        if (!empty($request->file('employee_image'))) {
            $employeeImage = $this->uploadObject(config('houmanity.filehandling.storage.employees'), $request->file('employee_image'));
        }

        $user = new User;
        $user->role_id = Role::EMPLOYEE_ROLE;
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->user_name = $validatedData['user_name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->password = Hash::make($validatedData['password']);
        $user->status = ($request->status == "on") ? User::STATUS_ACTIVE : User::STATUS_DISABLE;
        $user->save();

        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->image = $employeeImage ?? null;
        $employee->remarks = $request->remarks;

        if ($employee->save()) {
            $employee->clients()->sync($validatedData['clients']);

            Session::flash('successMessage', 'A new employee has been created successfully!');
            return redirect()->route('admin.employee.index');
        }

        return redirect()->back()
            ->withErrors('Failed to create new employee, Try again!');
    }

    public function show(Employee $employee)
    {
        $pageTitle = 'Employee Details';
        $breadcrumbs = [['text' => 'Employees', 'url' => '\admin\employee'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'employee' => $employee
        ];

        return view('admin.company-hq.employee.view', $viewParams);
    }

    public function edit(Employee $employee)
    {
        $pageTitle = 'Update Employee';
        $breadcrumbs = [['text' => 'Employees', 'url' => '\admin\employee'], ['text' => $pageTitle]];

        $viewParams = [
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'clients' => Client::all(),
            'employee' => $employee
        ];

        return view('admin.company-hq.employee.edit', $viewParams);
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $employee->user_id,
            'email' => 'required|email|unique:users,email,' . $employee->user_id,
            'phone' => 'nullable',
            'clients' => 'required|array',
        ]);

        $user = User::where('id', $employee->user_id)->first();

        if ($user && $employee) {
            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->user_name = $validatedData['user_name'];
            $user->email = $validatedData['email'];
            $user->phone = $validatedData['phone'];
            $user->status = ($request->status == "on") ? User::STATUS_ACTIVE : User::STATUS_DISABLE;

            if ($request->has('new_password') && $request->new_password != null) {
                $user->password = Hash::make($request->new_password);
            }
            $user->save();

            if ($request->hasFile('employee_image')) {
                $existingImage = $employee->image;
                $employeeImage = $this->uploadObject(config('houmanity.filehandling.storage.employees'), $request->file('employee_image'));
                $employee->image = $employeeImage;

                if ($existingImage) {
                    $this->deleteObject($existingImage);
                }
            }

            $employee->remarks = $request->remarks;

            if ($employee->save()) {
                $employee->clients()->sync($validatedData['clients']);

                Session::flash('successMessage', 'Employee has been updated successfully!');
                return redirect()->route('admin.employee.index');
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
