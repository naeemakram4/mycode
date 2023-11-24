<?php

use App\Http\Controllers\Customer\ProjectController;

Route::group([], function () {
    Route::prefix('project/{id}')->name('project.')->group(function () {
        Route::get('/target', [ProjectController::class, 'target'])->name('target');
    });
});

Route::resource('project', ProjectController::class);
