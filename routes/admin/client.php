<?php

use App\Http\Controllers\Admin\ClientController;

Route::group([], function () {
    //
});

Route::resource('client', ClientController::class);
