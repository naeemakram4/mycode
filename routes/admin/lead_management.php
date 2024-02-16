<?php

use App\Http\Controllers\Admin\LeadManagementController;

Route::group([], function () {
    //
});

Route::resource('lead-management', LeadManagementController::class);
