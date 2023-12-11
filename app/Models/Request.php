<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

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
}
