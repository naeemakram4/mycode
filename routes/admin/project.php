<?php

use App\Http\Controllers\Admin\ProjectController;

Route::group([], function () {
    Route::prefix('project/{id}')->name('project.')->group(function () {
        Route::get('/target', [ProjectController::class, 'target'])->name('target');
    });
    Route::get('project/get-employees/{id}', [ProjectController::class, 'getEmployees'])->name('project.get.employees');
});

Route::resource('project', ProjectController::class);
