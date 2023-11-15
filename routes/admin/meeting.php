<?php

use App\Http\Controllers\Admin\MeetingController;

Route::group(['prefix' => 'meeting', 'as' => 'meeting.'], function () {
    Route::get('/', [MeetingController::class, 'index'])->name('index');
});
