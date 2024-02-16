<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeadManagementType extends Model
{
    use HasFactory;

    public function leadManagements(): HasMany
    {
        return $this->hasMany(LeadManagement::class);
    }
}
