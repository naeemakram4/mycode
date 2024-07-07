<?php

use App\Http\Controllers\Employee\ProjectController;

Route::group([], function () {
    Route::prefix('project/{id}')->name('project.')->group(function () {
        Route::get('/task', [ProjectController::class, 'task'])->name('task');
    });

    Route::get('/task/{id}/comments', [ProjectController::class, 'taskComments'])->name('task.comments');
    Route::post('/task/{id}/comment', [ProjectController::class, 'taskCommentSubmit'])->name('task.comment.submit');
    Route::get('/task/comment/{id}/file-download', [ProjectController::class, 'taskCommentFileDownload'])->name('task.comment.file.download');
});

Route::resource('project', ProjectController::class);
