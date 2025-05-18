<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengurusKabinetController;

Route::get('/', function () {
    return view('index');
});


Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::resource('kegiatan', KegiatanController::class);
Route::get('PengurusKabinet', [ PengurusKabinetController::class, 'index'])->name('PengurusKabinet.index');
Route::get('PengurusKabinet/create', [ PengurusKabinetController::class, 'create'])->name('PengurusKabinet.create');
Route::post('PengurusKabinet', [ PengurusKabinetController::class, 'store'])->name('PengurusKabinet.store');
Route::get('PengurusKabinet/{id}/edit', [ PengurusKabinetController::class, 'edit'])->name('PengurusKabinet.edit');
Route::put('PengurusKabinet/{id}', [ PengurusKabinetController::class, 'update'])->name('PengurusKabinet.update');
Route::delete('PengurusKabinet/{id}', [ PengurusKabinetController::class, 'destroy'])->name('PengurusKabinet.destroy');
