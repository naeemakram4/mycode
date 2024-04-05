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
           'name' => 'change_request',
           'label' => 'Change Request'
        ]);
        RequestType::create([
            'name' => 'bug_report',
            'label' => 'Bug Report'
        ]);
    }
}
