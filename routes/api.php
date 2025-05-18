<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;


Route::apiResource('/kegiatan', KegiatanController::class);
