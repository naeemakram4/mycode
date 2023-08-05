<?php

use App\Http\Controllers\Admin\InvoiceController;

Route::group([], function () {
    //
});

Route::resource('invoice', InvoiceController::class);
