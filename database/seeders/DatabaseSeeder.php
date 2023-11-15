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
            PermissionSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            ClientTypeSeeder::class,
            ClientSeeder::class,
            EmployeeSeeder::class,
            ProjectSeeder::class,

            DepartmentSeeder::class,
            DesignationSeeder::class,
            TaskSeeder::class,
            TaskGroupSeeder::class,
        ]);
    }
}
