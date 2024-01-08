<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\Customer\StaticsController;
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

//Customer panel
Route::get('/', function(){ return redirect()->route('login'); });
Route::group(['middleware' => ['auth', 'verified'/*, 'customer.role'*/], 'prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');

    require __DIR__ . '/customer/profile.php';
    require __DIR__ . '/customer/project.php';
    require __DIR__ . '/customer/task.php';
    require __DIR__ . '/customer/invoice.php';
    require __DIR__ . '/customer/request.php';

    Route::get('seo', [StaticsController::class, 'seo'])->name('statics.seo');
    Route::get('ppc', [StaticsController::class, 'ppc'])->name('statics.ppc');

});

//Employee panel
Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
    require __DIR__ . '/employee/login.php';

    Route::group(['middleware' => ['employee.auth', 'employee.role']], function () {
        Route::get('/dashboard', [EmployeeDashboard::class, 'index'])->name('dashboard');
        require __DIR__ . '/employee/task.php';
        require __DIR__ . '/employee/client.php';
        require __DIR__ . '/employee/project.php';

    });
    Route::post('logout', [EmployeeLoginController::class, 'logout'])->name('logout');
});

//Admin panel
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require __DIR__ . '/admin/login.php';

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        require __DIR__ . '/admin/report.php';
        require __DIR__ . '/admin/meeting.php';

        // Company
        require __DIR__ . '/admin/department.php';
        require __DIR__ . '/admin/designation.php';
        require __DIR__ . '/admin/employee.php';

        require __DIR__ . '/admin/referral.php';
        require __DIR__ . '/admin/referred_client.php';
        require __DIR__ . '/admin/website.php';
        require __DIR__ . '/admin/client.php';
        require __DIR__ . '/admin/request.php';
        require __DIR__ . '/admin/project.php';

        // Sales Channel
        require __DIR__ . '/admin/followup.php';
        require __DIR__ . '/admin/service.php';
        require __DIR__ . '/admin/proposal.php';
        require __DIR__ . '/admin/invoice.php';

        // System Management
        require __DIR__ . '/admin/task.php';


        Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
    });
});


//This is just for menu route option
Route::get('test', function () { return redirect()->back()->withErrors('Coming Soon!'); })->name('test');
