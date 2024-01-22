<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\RequestType;
use Illuminate\Database\Seeder;

class RequestTypeSeeder extends Seeder
{
    public function run(): void
    {
        RequestType::create([
           'name' => 'graphic_designing',
           'label' => 'Graphic Designing'
        ]);
        RequestType::create([
            'name' => 'web_designing',
            'label' => 'Web Designing'
        ]);
        RequestType::create([
            'name' => 'seo',
            'label' => 'Seo Services'
        ]);
        RequestType::create([
            'name' => 'new_project',
            'label' => 'New Project'
        ]);
    }
}
