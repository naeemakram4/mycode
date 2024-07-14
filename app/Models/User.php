<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
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
//            self::STATUS_UNVERIFIED,
            self::STATUS_DISABLE
        ];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }

    public function taskComments(): HasMany
    {
        return $this->hasMany(TaskComment::class);
    }

    public function getFullName()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getNameFirstLetter()
    {
        return ucfirst(substr($this->first_name ?? ucfirst(chr(rand(97, 122))), 0, 1));
    }

    public function ability($permission): bool
    {
        $permissions = $this->getAllPermissionsFromRole();

        if ($permission && $permissions && in_array($permission, $permissions)) {
            return true;
        }

        return false;
    }

    public function getAllPermissionsFromRole(): array
    {
        $permissions = [];
        $role = $this->role->load('permissions');

        if (!$role) {
            return [];
        }

        foreach ($role->permissions as $permission) {
            $permissions[] = $permission->toArray();
        }

        return array_map('strtolower', array_unique(Arr::flatten(array_map(function ($permission) {
            return $permission['name'];
        }, $permissions))));
    }
}
