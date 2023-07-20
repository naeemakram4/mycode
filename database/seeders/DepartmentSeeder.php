<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $totalDepartmentRecords = 5;
        for ($i = 1; $i <= $totalDepartmentRecords; $i++) {
            Department::create([
                'name' => 'Department-'.$i,
                'status' => rand(0,1)
            ]);
        }
    }
}
