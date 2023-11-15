<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\EmployeeTask;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i < 5; $i++) {
            $task = Task::create([
                'task_group_id' => $i,
                'service_id' => $i,
                'subject' => 'Dummy Task-'.$i,
                'Description' => 'This is dummy Task',
                'priority' => Task::LOW_PRIORITY,
                'start_date' => Carbon::now()->subDays(2),
                'due_date' => Carbon::now()->addDays(4),
            ]);

            EmployeeTask::create([
               'task_id' => $task->id,
                'employee_id' => $i,
            ]);
        }
    }
}
