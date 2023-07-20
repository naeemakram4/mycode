<?php

//Designation
use App\Http\Controllers\DesignationController;

Route::get('admin/designation', [DesignationController::class, 'designation'])->name('designation');
Route::post('admin/add_designation_data', [DesignationController::class, 'add_designation_data'])->name('add_designation_data');
Route::get('admin/edit-designation/{id}',[DesignationController::class,'edit_designation'])->name('edit_designation');
Route::put('admin/update_designation/{id}', [DesignationController::class, 'update_designation'])->name('update.designation');
Route::delete('delete/designation/{id}',[DesignationController::class,'deleteDesignation'])->name('delete.designation');
Route::post('admin/get-designation/{id}', [DesignationController::class, 'departmentDesignation'])->name('get.designation');
