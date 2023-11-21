<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_project');
    }
}
