<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Rules\RoleNameRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAccessManagementController extends Controller
{
    public function edit()
    {
        $pageTitle = 'Update Permissions';
        $breadcrumbs = [['text' => $pageTitle]];
        $permissions = Permission::pluck('label', 'id')->all();

        $role = Role::whereId(Role::EMPLOYEE_ROLE)->first();

        if ($role) {
            $viewParams = [
                'pageTitle' => $pageTitle,
                'breadcrumbs' => $breadcrumbs,
                'permissions' => $permissions,
                'role' => $role
            ];
            return view('admin.access-management.edit', $viewParams);
        }

        return redirect()->back()
            ->withErrors('Invalid data!')
            ->withInput();

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', new RoleNameRule($id)],
            'label' => 'required|string',
            'active' => 'nullable',
            'permissions' => 'array|nullable'
        ]);

        $role = Role::find($id);

        if ($role) {
            $role->name = str_replace(' ', '-', strtolower($validatedData['name']));
            $role->label = $validatedData['label'];
            $role->active = isset($validatedData['active']) ? 1 : 0;

            $permissions = isset($validatedData['permissions']) ? $validatedData['permissions'] : array();

            if ($role->save()) {
                $role->permissions()->sync($permissions);

                Session::flash('successMessage', 'Role updated successfully!');
                return redirect()->route('admin.access-management.permission.edit');
            }
        }

        return redirect()->back()
            ->withErrors('Failed to create new role, Try again!')
            ->withInput();
    }
}
