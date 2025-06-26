<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KonsultasiController;

Route::resource('konsultasi', KonsultasiController::class)->middleware('auth');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route khusus admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Halaman dashboard admin
    Route::get('/panel', function () {
        return view('admin.panel');
    })->name('panel');

    // Manajemen User
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);

    // Export data konsultasi
    // Route::get('/konsultasi/export', [\App\Http\Controllers\Admin\ExportController::class, 'exportKonsultasi'])
    //     ->name('konsultasi.export');
});


