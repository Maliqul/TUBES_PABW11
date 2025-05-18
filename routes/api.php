<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PengurusKabinetController;
use App\Http\Controllers\AnggotaController;


Route::apiResource('/kegiatan', KegiatanController::class);
Route::apiResource('/divisi', DivisiController::class);
Route::apiResource('pengurus-kabinet', PengurusKabinetController::class);
Route::apiResource('anggota', AnggotaController::class);