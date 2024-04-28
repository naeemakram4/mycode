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

    // Lead Status
    const IN_PROGRESS_STATUS = 'in_progress';
    const ON_HOLD_STATUS = 'on_hold';
    const FINISHED_STATUS = 'finished';

    // SEO Audit Status
    const REQUESTED_SEO_STATUS = 'requested';
    const IN_PROGRESS_SEO_STATUS = 'in_progress';
    const COMPLETED_SEO_STATUS = 'completed';

    public static function getAllStatus(): array
    {
        return [
            self::IN_PROGRESS_STATUS,
            self::ON_HOLD_STATUS,
            self::FINISHED_STATUS,
        ];
    }

    public static function getAllSeoStatus(): array
    {
        return [
            self::REQUESTED_SEO_STATUS,
            self::IN_PROGRESS_SEO_STATUS,
            self::COMPLETED_SEO_STATUS,
        ];
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'lead_management_service');
    }

    public function leadManagementType(): BelongsTo
    {
        return $this->belongsTo(LeadManagementType::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function hasService($service)
    {
        return $this->services->contains('id', $service);
    }

    public function hasEmployee($employee)
    {
        return $this->employees->contains('id', $employee);
    }
}
