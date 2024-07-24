<?php
declare(strict_types=1);

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
                EmployeeSeeder::class,
                ProjectSeeder::class,
            ]);
        } else {
            $this->call([
                RoleSeeder::class,
                PermissionSeeder::class,
                AdminSeeder::class,
            ]);
        }
    }
}
