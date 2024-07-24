<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Employee\EmployeeDashboard;
use App\Http\Controllers\Employee\EmployeeLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return redirect()->route('admin.login');
});

//Employee panel
Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
    require __DIR__ . '/employee/login.php';

    Route::group(['middleware' => ['employee.auth', 'employee.role']], function () {
        Route::get('/dashboard', [EmployeeDashboard::class, 'index'])->name('dashboard');
        require __DIR__ . '/employee/task.php';
        require __DIR__ . '/employee/client.php';
        require __DIR__ . '/employee/project.php';
        require __DIR__ . '/employee/request.php';

    });
    Route::post('logout', [EmployeeLoginController::class, 'logout'])->name('logout');
});

//Admin panel
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require __DIR__ . '/admin/login.php';

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        require __DIR__ . '/admin/employee.php';
        require __DIR__ . '/admin/project.php';
        require __DIR__ . '/admin/task.php';
        require __DIR__ . '/admin/service.php';
        require __DIR__ . '/admin/access_management.php';


        Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
    });
});
