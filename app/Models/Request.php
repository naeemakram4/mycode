<?php
declare(strict_types=1);

namespace App\Models;

use App\Traits\FileHandling;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use FileHandling, HasFactory;

    protected $fillable = ['status'];

    const REQUEST_APPROVED_STATUS = 'Approved';
    const REQUEST_PENDING_STATUS = 'Pending';
    const REQUEST_REJECTED_STATUS = 'Rejected';

    public static function getAllRequestStatus()
    {
        return [
            self::REQUEST_APPROVED_STATUS,
            self::REQUEST_PENDING_STATUS,
            self::REQUEST_REJECTED_STATUS
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function requestType(): BelongsTo
    {
        return $this->belongsTo(RequestType::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
