<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    const COMPLETED_STATUS = 'Completed';
    const ACTIVE_STATUS = 'Active';
    const INACTIVE_STATUS = 'Inactive';
    const TO_DO_STATUS = 'To-do';
    const PENDING_STATUS = 'Pending';


    public static function getAllProjectStatus(): array
    {
        return [
            self::COMPLETED_STATUS,
            self::ACTIVE_STATUS,
            self::INACTIVE_STATUS,
            self::TO_DO_STATUS,
            self::PENDING_STATUS
        ];
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_project');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function hasEmployee($employee)
    {
        return $this->employees->contains('id', $employee);
    }
}
