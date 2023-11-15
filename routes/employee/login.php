<?php

use App\Http\Controllers\Employee\EmployeeLoginController;

Route::group(['middleware' => 'employee.guest:employee'], function () {
    Route::get('/', [EmployeeLoginController::class, 'loginForm'])->name('login');
    Route::post('/', [EmployeeLoginController::class, 'login'])->name('login');
});
