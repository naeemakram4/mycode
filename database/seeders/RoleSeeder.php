<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
            'label' => 'Super Admin',
            'active' => true,
        ]);
        Role::create([
            'id' => 2,
            'name' => 'customer',
            'label' => 'Customer',
            'active' => true,
        ]);
        Role::create([
            'id' => 3,
            'name' => 'employee',
            'label' => 'Employee',
            'active' => true,
        ]);
    }
}
