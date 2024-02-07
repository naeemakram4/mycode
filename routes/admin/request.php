<?php

use App\Http\Controllers\Admin\ClientRequestController;

Route::group([], function () {
    Route::prefix('request')->name('request.')->group(function (){
        Route::get('/', [ClientRequestController::class, 'index'])->name('index');
        Route::get('/{id}', [ClientRequestController::class, 'show'])->name('show');
    });
});
