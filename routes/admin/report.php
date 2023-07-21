<?php

use App\Http\Controllers\Admin\ReportController;

Route::group(['prefix' => 'report', 'as' => 'report.'], function () {
    Route::get('/project', [ReportController::class, 'project'])->name('project');
    Route::get('/task', [ReportController::class, 'task'])->name('task');
    Route::get('/invoice', [ReportController::class, 'invoice'])->name('invoice');
    Route::get('/lead', [ReportController::class, 'lead'])->name('lead');
    Route::get('/customer', [ReportController::class, 'customer'])->name('customer');
    Route::get('/proposal', [ReportController::class, 'proposal'])->name('proposal');
    Route::get('/followup', [ReportController::class, 'followup'])->name('followup');
});
