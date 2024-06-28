<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'Active';
    const STATUS_DISABLE = 'Disable';

    public static function allStatus(): array
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DISABLE
        ];
    }

    public function getFullName(): string
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getNameFirstLetter(): string
    {
        return ucfirst(substr($this->first_name, 0, 1));
    }

    public function taskComments(): HasMany
    {
        return $this->hasMany(TaskComment::class);
    }
}
