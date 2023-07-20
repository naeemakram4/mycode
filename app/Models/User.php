<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const STATUS_ACTIVE = 'Active';
    const STATUS_UNVERIFIED = 'Unverified';
    const STATUS_DISABLE = 'Disable';

    protected $guarded = [];

    public static function allStatus(): array
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_UNVERIFIED,
            self::STATUS_DISABLE
        ];
    }

}
