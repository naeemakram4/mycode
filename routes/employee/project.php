<?php

use App\Http\Controllers\Employee\ProjectController;

Route::group([], function () {
    Route::prefix('project/{id}')->name('project.')->group(function () {
        Route::get('/task', [ProjectController::class, 'target'])->name('task');
    });
});

Route::resource('project', ProjectController::class);
