<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            DesignationSeeder::class,
            EmployeeSeeder::class,
            ServiceSeeder::class,
            TaskGroupSeeder::class,
            TaskSeeder::class,
            PermissionSeeder::class
        ]);
    }
}
