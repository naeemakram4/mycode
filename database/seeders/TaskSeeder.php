<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\EmployeeTask;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $projects = Project::get();
        foreach ($projects as $project) {
            for ($i = 1; $i < 5; $i++) {
                $task = Task::create([
                    'project_id' => $project->id,
                    'service_id' => $i,
                    'subject' => ucfirst($project->name) . ' Task-' . $i,
                    'Description' => $project->description,
                    'priority' => ($i % 2) ? Task::LOW_PRIORITY : Task::High_PRIORITY,
                    'status' => ($i % 2) ? Task::YET_TO_STATUS : (($i != 2) ? Task::IN_PROGRESS_STATUS : Task::COMPLETED_STATUS),
                    'due_date' => Carbon::now()->addDays(10),
                ]);

                EmployeeTask::create([
                    'task_id' => $task->id,
                    'employee_id' => ($i % 2) ? $project->employees[0]->id : $project->employees[1]->id,
                ]);
            }
        }
    }
}
