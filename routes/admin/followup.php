<?php

use App\Http\Controllers\Admin\FollowupController;

Route::group([], function () {
   //
});

Route::resource('followup', FollowupController::class);
