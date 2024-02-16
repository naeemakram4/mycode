<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LeadManagement extends Model
{
    use HasFactory;

    protected $table = 'lead_managements';
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function leadManagementType(): BelongsTo
    {
        return $this->belongsTo(LeadManagementType::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
