<?php

use App\Http\Controllers\Employee\RequestController;

Route::group([], function () {
    Route::prefix('request')->name('request.')->group(function (){

    });

    Route::resource('request', RequestController::class);
});
