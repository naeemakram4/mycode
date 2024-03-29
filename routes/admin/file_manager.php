<?php

use App\Http\Controllers\Admin\FileManagerController;

Route::group(['prefix' => 'file-manager', 'as' => 'file.manager.'], function () {
    Route::get('/', [FileManagerController::class, 'index'])->name('index');
    Route::get('/{id}/directories', [FileManagerController::class, 'directories'])->name('directories');
    Route::get('/{id}/project/files', [FileManagerController::class, 'projectFiles'])->name('project.files');
    Route::get('/{id}/request/files', [FileManagerController::class, 'requestFiles'])->name('request.files');

});
