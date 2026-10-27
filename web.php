<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\LaporanController;
use App\Models\Pasien;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Admin
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    /*
    |--------------------------------------------------------------------------
    | CRUD Data Pasien
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/pasien', [PasienController::class, 'index'])
        ->name('pasien.index');

    Route::get('/admin/pasien/create', [PasienController::class, 'create'])
        ->name('pasien.create');

    Route::post('/admin/pasien/store', [PasienController::class, 'store'])
        ->name('pasien.store');

    Route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit'])
        ->name('pasien.edit');

    Route::put('/admin/pasien/update/{id}', [PasienController::class, 'update'])
        ->name('pasien.update');

    Route::delete('/admin/pasien/delete/{id}', [PasienController::class, 'destroy'])
        ->name('pasien.destroy');

    /*
    |--------------------------------------------------------------------------
    | Prediksi
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/prediksi', [PrediksiController::class, 'index'])
        ->name('prediksi.index');

    /*
    |--------------------------------------------------------------------------
    | Laporan
    |--------------------------------------------------------------------------
    */

    // Halaman laporan
    Route::get('/admin/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');

    // Export PDF
    Route::get('/admin/laporan/pdf', [LaporanController::class, 'pdf'])
        ->name('laporan.pdf');

    // Export Excel (CSV)
    Route::get('/admin/laporan/excel', [LaporanController::class, 'excel'])
        ->name('laporan.excel');
});

/*
|--------------------------------------------------------------------------
| Dokter
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Dokter
    |--------------------------------------------------------------------------
    */

    Route::get('/dokter/dashboard', function () {

        $pasiens = Pasien::latest()->get();

        return view('dokter.dashboard', compact('pasiens'));

    })->name('dokter.dashboard');

    /*
    |--------------------------------------------------------------------------
    | Diagnosa Pasien
    |--------------------------------------------------------------------------
    */

    // Form Diagnosa
    Route::get('/dokter/diagnosa/{id}', [DiagnosaController::class, 'create'])
        ->name('diagnosa.create');

    // Simpan Diagnosa
    Route::post('/dokter/diagnosa/store', [DiagnosaController::class, 'store'])
        ->name('diagnosa.store');

    // Lihat Hasil Diagnosa
    Route::get('/dokter/diagnosa/{id}/lihat', [DiagnosaController::class, 'show'])
        ->name('diagnosa.show');
});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');