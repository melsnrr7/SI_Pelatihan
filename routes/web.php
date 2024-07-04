<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPelatihanController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth/login');
});

Route::get('index', function () {
    if (Auth::user()->usertype == 'administrator') {
        return view('administrator/index');
    }
    if (Auth::user()->usertype == 'admin_pelatihan') {
        return view('admin_pelatihan/index');
    }
})->middleware(['auth', 'verified'])->name('index');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('admin_pelatihan', [AdminPelatihanController::class, 'index']);
Route::get('administrator', [AdministratorController::class, 'index']);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('peserta_pelatihan', PesertaPelatihanController::class);
Route::resource('data_peserta', DataPesertaController::class);
// Route::get('data_peserta/edit/{id}', [DataPesertaController::class, 'edit'])->name('data_peserta.edit');
// Route::post('data_peserta/update{id}', [DataPesertaController::class, 'update'])->name('data_peserta.update');
Route::resource('jurusan', JurusanController::class);
Route::resource('level', LevelController::class);
Route::resource('gelombang', GelombangController::class);
Route::resource('riwayat', RiwayatController::class);

Route::get('administrator/index', [HomeController::class, 'index1'])->middleware(['auth', 'administrator']);
Route::get('admin_pelatihan/index', [HomeController::class, 'index2'])->middleware(['auth', 'admin_pelatihan']);

// Route::get('/level/restore/1', [LevelController::class, 'restore']);
