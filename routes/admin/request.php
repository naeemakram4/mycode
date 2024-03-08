<?php

use App\Http\Controllers\Admin\ClientRequestController;

Route::group([], function () {
    Route::prefix('request')->name('request.')->group(function (){
        Route::get('/', [ClientRequestController::class, 'index'])->name('index');
        Route::get('/create', [ClientRequestController::class, 'create'])->name('create');
        Route::post('/store', [ClientRequestController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ClientRequestController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ClientRequestController::class, 'update'])->name('update');
        Route::get('/{id}', [ClientRequestController::class, 'show'])->name('show');
        Route::post('/updated-status/{id}', [ClientRequestController::class, 'updateStatus'])->name('update.status');

    });
});
