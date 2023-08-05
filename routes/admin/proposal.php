<?php

use App\Http\Controllers\Admin\ProposalController;

Route::group([], function () {
    //
});

Route::resource('proposal', ProposalController::class);
