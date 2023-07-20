<?php

//Team
use App\Http\Controllers\TeamController;

Route::get('admin/team', [TeamController::class, 'team'])->name('team');
Route::get('admin/add_team', [TeamController::class, 'addTeam'])->name('add_team');
Route::post('admin/add_team_data', [TeamController::class, 'addTeamData'])->name('add_team_data');
Route::get('admin/edit-team/{id}',[TeamController::class,'editTeam'])->name('edit_team');
Route::put('admin/update_team/{id}', [TeamController::class, 'updateTeam'])->name('edit.team');
Route::delete('delete/team/{id}',[TeamController::class,'deleteTeam'])->name('delete.team');
Route::get('view/team/{id}',[TeamController::class,'viewTeam'])->name('view.team');
