<?php

namespace Database\Seeders;

use App\Models\LeadManagementType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadManagementTypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lead_management_types')->delete();

        LeadManagementType::create([
            'name' => 'referral',
            'label' => 'Referral'
        ]);
        LeadManagementType::create([
            'name' => 'referred_client',
            'label' => 'Referred Client'
        ]);
        LeadManagementType::create([
            'name' => 'website',
            'label' => 'Website'
        ]);
    }
}
