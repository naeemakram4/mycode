<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employees')->delete();
        $faker = \Faker\Factory::create();

        $totalTeamRecords = 10;
        for ($i = 1; $i <= $totalTeamRecords; $i++) {
            $user = User::create([
                'role_id' => Role::EMPLOYEE_ROLE,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'user_name' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make('admin123'),
                'status' => 'Active',
            ]);

            $employee = Employee::create([
                'user_id' => $user->id,
                'department_id' => rand(1,5),
                'designation_id' => rand(1,5),
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber,
                'remarks' => 'This is dummy team records!',
                'status' => rand(0,1)
            ]);

            DB::table('client_employee')->insert([
                ['client_id' => rand(1,5), 'employee_id' => $employee->id],
                ['client_id' => rand(6,10), 'employee_id' => $employee->id],
            ]);
        }
    }
}
