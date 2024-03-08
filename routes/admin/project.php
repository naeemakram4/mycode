<?php

use App\Http\Controllers\Admin\ProjectController;

Route::group([], function () {
    Route::prefix('project/{id}')->name('project.')->group(function () {
        Route::get('/task', [ProjectController::class, 'target'])->name('task');
    });
    Route::get('project/get-employees/{id}', [ProjectController::class, 'getEmployees'])->name('project.get.employees');
});

Route::resource('project', ProjectController::class);
