<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\RoleDim;
use App\Models\UserDim;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();

        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'phone' => '2818048685',
            'email' => 'admin@houmanity.com',
            'user_name' => 'admin',
            'password' => Hash::make('admin123'),
            'status' => Admin::STATUS_ACTIVE,
            'created_at' => Carbon::now()
        ]);
    }
}
