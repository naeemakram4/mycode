<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }

    public static function syncPermissions(): bool
    {
        try {
            $permissions = config('mycode.permissions.customer');
            $existingPermissions = self::all()->pluck('name')->toArray();
            $permissionsToBeDeleted = array_diff($existingPermissions, $permissions);
            $permissionsToBeAdded = array_diff($permissions, $existingPermissions);

            if (!empty($permissionsToBeDeleted)) {
                Permission::whereIn('name', $permissionsToBeDeleted)->delete();
            }

            foreach ($permissionsToBeAdded as $name => $label) {
                Permission::create([
                    'name' => $name,
                    'label' => $label
                ]);
            }

            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
