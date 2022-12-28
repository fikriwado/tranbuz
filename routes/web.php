<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/search', [HomeController::class, 'search'])->name('search');

Route::get('/admin', function () {
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Pegawai
    Route::resource('/pegawai', 'App\Http\Controllers\PegawaiController')->except([
        'create', 'show', 'edit'
    ]);;

    // Bus
    Route::resource('/bus', 'App\Http\Controllers\BusController');
    
    // Lokasi
    Route::resource('/lokasi', 'App\Http\Controllers\LokasiController');
    
    // Rute
    Route::get('/rute/laporan', [RuteController::class, 'laporan'])->name('laporan');
    Route::post('/rute/laporan/pdf', [RuteController::class, 'muatLaporan'])->name('muatLaporan');
    Route::resource('/rute', 'App\Http\Controllers\RuteController');
});
