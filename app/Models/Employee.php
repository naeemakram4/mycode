<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'employee_tasks');
    }

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_employee');
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'employee_project');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function leadManagements(): BelongsToMany
    {
        return $this->belongsToMany(LeadManagement::class);
    }

    public function hasClient($client)
    {
        return $this->clients->contains('id', $client);
    }
}
