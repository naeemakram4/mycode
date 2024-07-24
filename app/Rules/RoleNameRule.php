<?php

namespace App\Rules;

use App\Models\Role;
use Illuminate\Contracts\Validation\Rule;

class RoleNameRule implements Rule
{
    protected $id;

    public function __construct($id = null)
    {
        $this->id = $id;
    }

    public function passes($attribute, $value): bool
    {
        $name = str_replace(' ', '-', strtolower($value));

        if ($this->id == null) {
            $exist = Role::withTrashed()
                ->where('name', $name)
                ->first();

            if ($exist) {
                return false;
            }
            return true;
        } else {
            $existWithId = Role::whereNotIn('id', [$this->id])
                ->where('name', $name)
                ->first();

            if ($existWithId) {
                return false;
            }
            return true;
        }
    }

    public function message()
    {
        return 'The :attribute is already exist!';
    }
}
