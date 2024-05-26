<?php

use App\Http\Controllers\Admin\TaskController;

Route::group(['prefix' => 'task', 'as' => 'task.'], function () {
    Route::post('/add-group', [TaskController::class, 'addGroup'])->name('add.group');
    Route::get('/view-group-tasks/{id}', [TaskController::class, 'viewGroupTasks'])->name('view.group.tasks');

    Route::put('/updated-task-status', [TaskController::class, 'updateStatus'])->name('update.task.status');
});

Route::resource('task', TaskController::class);
