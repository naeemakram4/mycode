<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = config('houmanity.permissions.customer');
        foreach ($permissions as $name => $label) {
            Permission::create([
                'name' => $name,
                'label' => $label
            ]);
        }
    }
}
