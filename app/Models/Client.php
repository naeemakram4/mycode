<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'client_service')->withPivot('id', 'start_date');
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'client_employee');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function leadManagements(): HasMany
    {
        return $this->hasMany(LeadManagement::class);
    }

    public function hasService($service)
    {
        return $this->services->contains('id', $service);
    }

}

