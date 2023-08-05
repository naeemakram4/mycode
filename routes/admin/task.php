<?php

use App\Http\Controllers\Admin\TaskController;

Route::group([], function () {
    //
});

Route::resource('task', TaskController::class);
