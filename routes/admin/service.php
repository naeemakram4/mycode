<?php

use App\Http\Controllers\Admin\ServiceController;

Route::group([], function () {
    //
});

Route::resource('service', ServiceController::class);
