<?php

use App\Http\Controllers\Customer\RequestController;

Route::group([], function () {
    Route::prefix('request')->name('request.')->group(function (){

    });

    Route::resource('request', RequestController::class);
});
