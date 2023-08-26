<?php

namespace App\Models;

use Database\Seeders\TaskGroupSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    // Task Priorities
    const LOW_PRIORITY = 'low';
    const MEDIUM_PRIORITY = 'medium';
    const High_PRIORITY = 'high';
    const URGENT_PRIORITY = 'urgent';

    // Task Status
    const NOT_STARTED_STATUS = 'not_started';
    const IN_PROGRESS_STATUS = 'in_progress';
    const COMPLETED_STATUS = 'completed';

    public static function allTaskPriorities(): array
    {
        return [
            self::LOW_PRIORITY,
            self::MEDIUM_PRIORITY,
            self::High_PRIORITY,
            self::URGENT_PRIORITY,
        ];
    }

    public static function allTaskStatus(): array
    {
        return [
            self::NOT_STARTED_STATUS,
            self::IN_PROGRESS_STATUS,
            self::COMPLETED_STATUS,
        ];
    }

    public function taskGroup(): BelongsTo
    {
        return $this->belongsTo(TaskGroup::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_tasks');
    }
}
