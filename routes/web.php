<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DocumentPengusulController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\FormJabatanFungsionalController;
use App\Http\Controllers\FormJabatanStrukturalController;
use App\Http\Controllers\FormPangkatRegularController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\JabatanController;

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


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/login/proses', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'ceklevel:superadmin'], function () {
        Route::get('/register-role', [RegisterController::class, 'index'])->name('register.role');
        Route::post('/register-store', [RegisterController::class, 'register'])->name('register.store');
        Route::get('/dashboard-super-admin', [DashboardController::class, 'super']);
        Route::get('/role', [RoleController::class, 'index'])->name('role.table');
        Route::get('/periode', [PeriodeController::class, 'index']);
        Route::get('/form-periode', [PeriodeController::class, 'create']);
        Route::get('/jabatan', [JabatanController::class, 'index']);
        Route::get('/kecamatan', [KecamatanController::class, 'index']);
        Route::get('/form-kecamatan', [KecamatanController::class, 'create']);
        Route::post('/form-kecamatan/proses', [KecamatanController::class, 'proses'])->name('kecamatan.proses');
        Route::get('/dinas', [DinasController::class, 'index']);
        Route::get('/form-dinas', [DinasController::class, 'create']);
        Route::get('/form-jabatan', [JabatanController::class, 'create']);
        Route::get('/document-pengusul', [DocumentPengusulController::class, 'index']);
        Route::get('/pages', [PagesController::class, 'index']);
    });

    Route::group(['middleware' => 'ceklevel:pengusul'], function () {
        Route::get('/notif-pengusul', [NotificationController::class, 'notifPengusul']);
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/table-jabatan-fungsional', [FormJabatanFungsionalController::class, 'index']);
        Route::get('/form-jabatan-fungsional', [FormJabatanFungsionalController::class, 'create']);
        Route::post('/form-jabatan-fungsional/post', [FormJabatanFungsionalController::class, 'store'])->name('jabatan.fungsional.post');
        Route::get('/form-jabatan-fungsional/{id}', [FormJabatanFungsionalController::class, 'show'])->name('jabatan.fungsional.show');
        Route::get('/table-jabatan-struktural', [FormJabatanStrukturalController::class, 'index']);
        Route::get('/form-jabatan-struktural', [FormJabatanStrukturalController::class, 'create']);
        Route::get('/form-regular', [FormPangkatRegularController::class, 'create']);
        Route::get('/table-regular', [FormPangkatRegularController::class, 'index']);
        Route::get('/dashboard-pengusul', [DashboardController::class, 'index']);
        Route::get('/proses', [ProsesController::class, 'index']);

    });

    Route::group(['middleware' => 'ceklevel:verifikator'], function () {
        Route::get('/dashboard-verifikator', [DashboardController::class, 'verifikator']);
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
