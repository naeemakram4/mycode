<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientType;
use App\Models\Request;
use App\Models\RequestType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (config('app.env') == 'local') {
            $this->call([
                RoleSeeder::class,
                PermissionSeeder::class,
                AdminSeeder::class,
                UserSeeder::class,
                ServiceSeeder::class,
                ClientSeeder::class,
                EmployeeSeeder::class,
                ProjectSeeder::class,
                TaskSeeder::class,
                RequestTypeSeeder::class,
                RequestSeeder::class,
                LeadManagementTypeSeeder::class,

//            DepartmentSeeder::class,
//            DesignationSeeder::class,
//            TaskGroupSeeder::class,
            ]);
        } else {
            $this->call([
                RoleSeeder::class,
                PermissionSeeder::class,
                AdminSeeder::class,
                LeadManagementTypeSeeder::class,
            ]);
        }
    }
}
