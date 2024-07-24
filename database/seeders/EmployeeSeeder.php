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
        $faker = \Faker\Factory::create();

        $totalTeamRecords = 10;
        for ($i = 1; $i <= $totalTeamRecords; $i++) {
            $user = User::create([
                'role_id' => Role::EMPLOYEE_ROLE,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'user_name' => $faker->userName,
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber(),
                'password' => Hash::make('admin123'),
                'status' => 'Active',
            ]);

            $employee = Employee::create([
                'user_id' => $user->id,
                'remarks' => 'This is dummy team records!',
            ]);
        }
    }
}
