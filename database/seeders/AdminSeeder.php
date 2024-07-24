<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->delete();

        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'phone' => '123456789',
            'email' => 'admin@mycode.com',
            'user_name' => 'admin',
            'password' => Hash::make('admin123'),
            'status' => Admin::STATUS_ACTIVE,
            'created_at' => Carbon::now()
        ]);
    }
}
