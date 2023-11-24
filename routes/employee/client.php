<?php

use App\Http\Controllers\Employee\ClientController;

Route::group([], function () {
    //
});

Route::resource('client', ClientController::class);
