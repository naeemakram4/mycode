<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //Creating default Employee
        $empUser = User::create([
            'first_name' => 'Default',
            'last_name' => 'Employee',
            'role_id' => Role::EMPLOYEE_ROLE,
            'user_name' => 'employee',
            'password' => Hash::make('admin123'),
            'status' => User::STATUS_ACTIVE,
            'email_verified_at' => Carbon::now()
        ]);

        $employee = Employee::create([
            'user_id' => $empUser->id,
            'remarks' => 'This is dummy default employee records!',
        ]);

    }
}
