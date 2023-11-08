<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'role_id' => Role::CLIENT_ROLE,
            'first_name' => 'Default',
            'last_name' => 'Client',
            'user_name' => 'df_client',
            'phone' => '1234567890',
            'email' => 'df_client@houmanity.com',
            'password' => Hash::make('admin123'),
            'status' => User::STATUS_ACTIVE,
            'email_verified_at' => Carbon::now()
        ]);

        Client::create([
            'user_id' => $user->id,
            'client_type_id' => 1,
            'company_name' => 'Houmanity',
            'website' => 'https://houmanitycrm.com/',
            'address' => '123 house, st 12',
            'city' => 'city',
            'state' => 'state',
            'postal_code' => '13245',
            'start_date' => Carbon::now()->format('Y-m-d'),
        ]);

        //TODO: create client_service record manually.
    }
}
