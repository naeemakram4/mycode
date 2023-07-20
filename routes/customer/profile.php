<?php

use App\Http\Controllers\Customer\CustomerProfile;

//Profile
Route::get('profile', [CustomerProfile::class, 'view'])->name('profile.view');
Route::put('profile/update', [CustomerProfile::class, 'update'])->name('profile.update');
Route::put('profile/update/password', [CustomerProfile::class, 'updatePassword'])->name('profile.update.password');
