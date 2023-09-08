<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN_ROLE = 1;
    const CUSTOMER_ROLE = 2;
    const EMPLOYEE_ROLE = 3;

}
