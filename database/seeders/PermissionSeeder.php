<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = config('mycode.permissions.employee');
        foreach ($permissions as $name => $label) {
            $permission = Permission::create([
                'name' => $name,
                'label' => $label
            ]);

            PermissionRole::create([
                'permission_id' => $permission->id,
                'role_id' => Role::EMPLOYEE_ROLE
            ]);
        }
    }
}
