<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    public function run(): void
    {
        $totalDesignationRecords = 5;
        for ($i = 1; $i <= $totalDesignationRecords; $i++) {
            Designation::create([
                'department_id' => rand(1,5),
                'name' => 'Designation-'.$i,
                'status' => rand(0,1)
            ]);
        }
    }
}
