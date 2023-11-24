<?php

use App\Http\Controllers\Customer\InvoiceController;

Route::group([], function () {
    Route::prefix('invoice')->name('invoice.')->group(function (){
       Route::get('/', [InvoiceController::class, 'index'])->name('index');
        Route::get('/{id}', [InvoiceController::class, 'show'])->name('show');
    });
});
