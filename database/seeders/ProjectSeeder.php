<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $totalProjectRecords = 20;
        for ($i = 1; $i <= $totalProjectRecords; $i++) {
            $clientId = rand(1, 10);
            $project = Project::create([
                'name' => $faker->domainWord,
                'description' => $faker->text(25),
                'start_date' => Carbon::now()->subWeek(1),
                'due_date' => Carbon::now()->addYear(),
                'status' => ($i % 2) ? Project::ACTIVE_STATUS : Project::COMPLETED_STATUS
            ]);

            DB::table('employee_project')->insert([
                ['employee_id' => rand(1, 5), 'project_id' => $project->id],
                ['employee_id' => rand(6, 10), 'project_id' => $project->id],
            ]);
        }
    }
}
