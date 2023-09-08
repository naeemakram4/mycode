<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id' => Role::CUSTOMER_ROLE,
            'user_name' => 'customer',
            'password' => Hash::make('admin'),
            'status' => User::STATUS_ACTIVE,
            'email_verified_at' => Carbon::now()
        ]);
    }
}
