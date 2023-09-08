<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Customer\CustomerDashboardController;
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
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');

    require __DIR__ . '/customer/profile.php';
    require __DIR__ . '/customer/task.php';

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
