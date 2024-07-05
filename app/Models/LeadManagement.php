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
    const OPEN_NOT_CONTACTED_STATUS = 'open_not_contacted';
    const Working_CONTACTED_STATUS = 'working_contacted';
    const CLOSED_CONVERTED_STATUS = 'closed_converted';
    const CLOSED_NOT_CONVERTED_STATUS = 'closed_not_converted';

    // SEO Audit Status
    const REQUESTED_SEO_STATUS = 'requested';
    const IN_PROGRESS_SEO_STATUS = 'in_progress';
    const COMPLETED_SEO_STATUS = 'completed';

    public static function getAllStatus(): array
    {
        return [
            self::OPEN_NOT_CONTACTED_STATUS,
            self::Working_CONTACTED_STATUS,
            self::CLOSED_CONVERTED_STATUS,
            self::CLOSED_NOT_CONVERTED_STATUS
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
