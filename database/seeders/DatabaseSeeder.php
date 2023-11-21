<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
<<<<<<< HEAD
=======
            PermissionSeeder::class,
>>>>>>> 438c8c3ff7d0871f059063edfae055c88cba80ea
            AdminSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            ClientTypeSeeder::class,
            ClientSeeder::class,
            EmployeeSeeder::class,
            ProjectSeeder::class,

            DepartmentSeeder::class,
            DesignationSeeder::class,
<<<<<<< HEAD
            EmployeeSeeder::class,
            ServiceSeeder::class,
            TaskGroupSeeder::class,
            TaskSeeder::class,
            PermissionSeeder::class
=======
            TaskSeeder::class,
            TaskGroupSeeder::class,
>>>>>>> 438c8c3ff7d0871f059063edfae055c88cba80ea
        ]);
    }
}
