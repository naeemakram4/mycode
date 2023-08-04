<?php

use App\Http\Controllers\Admin\ReferredClientController;

Route::group([], function () {
    //
});

Route::resource('referred-client', ReferredClientController::class, ['names' => 'referred.client']);
