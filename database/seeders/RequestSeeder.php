<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    public function run(): void
    {
        // Creating some fake clients
        $faker = \Faker\Factory::create();

        $totalRequestRecords = 10;
        for ($i = 1; $i <= $totalRequestRecords; $i++) {
            $request = Request::create([
                'client_id' => rand(1,10),
                'subject' => $faker->jobTitle,
                'description' => $faker->text(100),
            ]);
        }
    }
}
