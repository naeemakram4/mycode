<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    // Task Priorities
    const LOW_PRIORITY = 'Low';
    const MEDIUM_PRIORITY = 'Medium';
    const High_PRIORITY = 'High';
    const URGENT_PRIORITY = 'Urgent';

    // Task Status
    const YET_TO_STATUS = 'Yet_To_Start';
    const IN_PROGRESS_STATUS = 'In_Progress';
    const COMPLETED_STATUS = 'Completed';

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
            self::YET_TO_STATUS,
            self::IN_PROGRESS_STATUS,
            self::COMPLETED_STATUS,
        ];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_tasks');
    }

    public function taskComments(): HasMany
    {
        return $this->hasMany(TaskComment::class);
    }
}
