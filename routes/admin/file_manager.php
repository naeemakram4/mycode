<?php

use App\Http\Controllers\Admin\FileManagerController;

Route::group(['prefix' => 'file-manager', 'as' => 'file.manager.'], function () {
    Route::get('/', [FileManagerController::class, 'index'])->name('index');
    Route::get('/{name}/files', [FileManagerController::class, 'directoryFiles'])->name('directory.files');
});
