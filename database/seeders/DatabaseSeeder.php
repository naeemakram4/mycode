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
            AdminSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            DesignationSeeder::class,
            EmployeeSeeder::class,
            ServiceSeeder::class,
            TaskSeeder::class,
            TaskGroupSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            ClientTypeSeeder::class,
            Client::class
        ]);
    }
}
