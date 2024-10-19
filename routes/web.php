<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProfesionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [KaryawanController::class, 'index'])->name('karyawan_index');
Route::get('/profesi', [ProfesionController::class, 'index'])->name('profesion_index');
Route::get('/karyawan_create', [KaryawanController::class, 'create'])->name('karyawan_create');
Route::post('/karyawan_store', [KaryawanController::class, 'store'])->name('karyawan_store');
Route::get('/karyawan_edit{id}',[KaryawanController::class, 'edit'])->name('karyawan_edit');
Route::put('/karyawan_update{id}',[KaryawanController::class, 'update'])->name('karyawan_update');
Route::delete('/karyawan_delete{id}',[KaryawanController::class, 'destroy'])->name('karyawan_destroy');
