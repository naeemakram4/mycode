<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $client = Client::create([
            'user_id' => $user->id,
            'company_name' => 'Houmanity',
            'website' => 'https://houmanitycrm.com/',
            'address' => '123 house, st 12',
            'city' => 'city',
            'state' => 'state',
            'postal_code' => '13245',
        ]);

        // Creating some fake clients
        $faker = \Faker\Factory::create();

        $totalClientRecords = 10;
        for ($i = 1; $i <= $totalClientRecords; $i++) {
            $fakeUser = User::create([
                'role_id' => Role::CLIENT_ROLE,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'user_name' => $faker->userName,
                'phone' => '1234567890',
                'email' => $faker->email,
                'password' => Hash::make('admin123'),
                'status' => User::STATUS_ACTIVE,
                'email_verified_at' => Carbon::now()
            ]);

            $fakeClient = Client::create([
                'user_id' => $fakeUser->id,
                'company_name' => $faker->company,
                'website' => $faker->url,
                'address' => '123 house, st 12',
                'city' => 'city',
                'state' => 'state',
                'postal_code' => '13245',
            ]);
        }
    }
}
