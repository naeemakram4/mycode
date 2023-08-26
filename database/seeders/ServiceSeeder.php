<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i < 7; $i++) {
            Service::create([
                'name' => 'service-'.$i,
                'label' => 'Service-'.$i,
                'description' => 'service-'.$i
            ]);
        }
    }
}
