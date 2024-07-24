<?php

use App\Http\Controllers\Admin\AdminAccessManagementController;

Route::group([], function () {
    // Work Queue
    Route::prefix('access-management')->name('access-management.')->group(function () {
        Route::get('/permissions/sync', [AdminAccessManagementController::class, 'syncPermissions'])->name('permission.sync');
        Route::get('/role/permission/edit', [AdminAccessManagementController::class, 'edit'])->name('permission.edit');
        Route::put('/role/permission/{id}/update', [AdminAccessManagementController::class, 'update'])->name('permission.update');
    });
});
