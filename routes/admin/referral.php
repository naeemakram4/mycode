<?php

use App\Http\Controllers\Admin\ReferralController;

Route::group([], function () {
    //
});

Route::resource('referral', ReferralController::class);
