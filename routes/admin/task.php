<?php

use App\Http\Controllers\Admin\TaskController;

Route::group(['prefix' => 'task', 'as' => 'task.'], function () {
    Route::post('/add-group', [TaskController::class, 'addGroup'])->name('add.group');
    Route::get('/view-group-tasks/{id}', [TaskController::class, 'viewGroupTasks'])->name('view.group.tasks');
});

Route::resource('task', TaskController::class);
