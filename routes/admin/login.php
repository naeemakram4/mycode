<?php

use App\Http\Controllers\Admin\AdminLoginController;

Route::group(['middleware' => 'admin.guest:admins'], function () {
    Route::get('/', [AdminLoginController::class, 'adminLoginForm'])->name('login');
    Route::post('/', [AdminLoginController::class, 'login'])->name('login');
});
