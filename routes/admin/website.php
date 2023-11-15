<?php

use App\Http\Controllers\Admin\WebsiteController;

Route::group([], function () {
    //
});

Route::resource('website', WebsiteController::class);
