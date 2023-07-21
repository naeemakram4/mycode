<?php

use App\Http\Controllers\Admin\ProjectController;

Route::group([], function () {
    //
});

Route::resource('project', ProjectController::class);
