<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UmkmdController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TiketController;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/tiket', [TiketController::class, 'tiket']);
Route::post('/tiket_hasil', [TiketController::class, 'hasil']);

Route::get('/belajar', [BelajarController::class, 'index']);

Route::get('/', function () {
    return view('mata_kuliah');
});

Route::get('pembimbing', [PembimbingController::class, 'index']);

Route::get('praktikum', [PraktikumController::class, 'index']);

Route::get('umkm', [UmkmController::class, 'index']);

Route::get('/umkmd', [UmkmdController::class, 'index']);
Route::get('/umkmd/create', [UmkmdController::class, 'create']);
Route::post('/umkmd', [UmkmdController::class, 'store']);

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/hasil', [PendaftaranController::class, 'hasil']);