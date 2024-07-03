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
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\FormPangkatijazahController;

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

        // dashboard
        Route::get('/dashboard-super-admin', [DashboardController::class, 'superadmin']);

        // registrasi
        Route::get('/register-role', [RegisterController::class, 'index'])->name('register.role');
        Route::post('/register-store', [RegisterController::class, 'register'])->name('register.store');

        // role
        Route::get('/role', [RoleController::class, 'index'])->name('role.table');

        // periode
        Route::get('/periode', [PeriodeController::class, 'index']);
        Route::get('/form-periode', [PeriodeController::class, 'create']);
        Route::post('/form-periode/store', [PeriodeController::class, 'store'])->name('periode.store');

        // jabatan
        Route::get('/golongan', [GolonganController::class, 'index']);
        Route::get('/form-golongan', [GolonganController::class, 'create']);
        Route::post('/form-golongan/store', [GolonganController::class, 'store'])->name('golongan.store');

        // kecamatan
        Route::get('/kecamatan', [KecamatanController::class, 'index']);
        Route::get('/form-kecamatan', [KecamatanController::class, 'create']);
        Route::post('/form-kecamatan/store', [KecamatanController::class, 'store'])->name('kecamatan.store');

        // dinas
        Route::get('/dinas', [DinasController::class, 'index']);
        Route::get('/form-dinas', [DinasController::class, 'create']);
        Route::post('/form-dinas/store', [DinasController::class, 'store'])->name('dinas.store');

        // status
        Route::get('/status', [StatusController::class, 'index']);
        Route::get('/form-status', [StatusController::class, 'create']);
        Route::post('/form-status/store', [StatusController::class, 'store'])->name('status.store');

        // dokumen pengusul
        Route::get('/document-pengusul', [DocumentPengusulController::class, 'index']);
        Route::delete('/document-pengusul/delete/{id}', [FormJabatanFungsionalController::class, 'delete'])->name('form-jabatan-fungsional.delete');
        Route::get('/document-pengusul/show/{id}', [DocumentPengusulController::class, 'show'])->name('document.pengusul.show');

        // halaman
        Route::get('/pages', [PagesController::class, 'index']);
    });

    Route::group(['middleware' => 'ceklevel:pengusul'], function () {

        // dashboard
        Route::get('/dashboard-pengusul', [DashboardController::class, 'index']);

        // notifikasi
        Route::get('/notifikasi-pengusul', [NotificationController::class, 'index']);
        Route::post('/notifikasi/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
        Route::delete('/notifikasi/archive/{id}', [NotificationController::class, 'archive'])->name('notifications.archive');
        Route::post('/notifikasi/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.readAll');



        // profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

        // form jabatan fungsional
        Route::get('/table-jabatan-fungsional', [FormJabatanFungsionalController::class, 'index']);
        Route::get('/table-berhasil-jabatan-fungsional', [FormJabatanFungsionalController::class, 'berhasil']);
        Route::get('/proses-table-jabatan-fungsional', [FormJabatanFungsionalController::class, 'proses']);
        Route::get('/form-jabatan-fungsional', [FormJabatanFungsionalController::class, 'create']);
        Route::get('/form-jabatan-fungsional/{id}', [FormJabatanFungsionalController::class, 'show'])->name('jabatan.fungsional.show');
        Route::post('/form-jabatan-fungsional/post', [FormJabatanFungsionalController::class, 'store'])->name('jabatan.fungsional.post');

        // form jabatan struktural
        Route::get('/table-jabatan-struktural', [FormJabatanStrukturalController::class, 'index']);
        Route::get('/form-jabatan-struktural', [FormJabatanStrukturalController::class, 'create']);

        // form jabatan regular
        Route::get('/form-regular', [FormPangkatRegularController::class, 'create']);
        Route::get('/table-regular', [FormPangkatRegularController::class, 'index']);
        Route::get('/proses-table-regular', [FormPangkatRegularController::class, 'proses']);

        // form jabatan ijazah
        Route::get('/form-jabatan-ijazah', [FormPangkatijazahController::class, 'create']);
        Route::get('/table-jabatan-ijazah', [FormPangkatijazahController::class, 'index']);
        Route::get('/proses-table-ijazah', [FormPangkatijazahController::class, 'proses']);

    });

    Route::group(['middleware' => 'ceklevel:verifikator'], function () {

        // dashboard
        Route::get('/dashboard-verifikator', [DashboardController::class, 'verifikator']);

        // profile
        // Route::get('/profile-verifikator', [ProfileController::class, 'indexverifikator'])->name('profile');

        // form jabatan fungsional
        Route::get('/table-jabatan-fungsional-verifikator', [FormJabatanFungsionalController::class, 'indexverifikator']);
        Route::get('/proses-table-jabatan-fungsional-verifikator', [FormJabatanFungsionalController::class, 'prosesverifikator']);
        Route::get('/verifikasi-table-jabatan-fungsional-verifikator/{id}', [FormJabatanFungsionalController::class, 'verifikasi'])->name('verifikasi.jabatan.fungsional.edit');
        Route::post('/verifikasi-table-jabatan-fungsional-verifikator/post/{id}', [FormJabatanFungsionalController::class, 'verifikasipost'])->name('verifikasi.jabatan.fungsional.post');
        Route::get('/form-jabatan-fungsional-verifikator/{id}', [FormJabatanFungsionalController::class, 'showverifikator'])->name('jabatan.fungsional.show.verifikator');

        // form jabatan struktural
        Route::get('/table-jabatan-struktural-verifikator', [FormJabatanStrukturalController::class, 'indexverifikator']);

        // form jabatan regular
        Route::get('/table-regular-verifikator', [FormPangkatRegularController::class, 'indexverifikator']);
        Route::get('/proses-table-regular-verifikator', [FormPangkatRegularController::class, 'prosesverifikator']);
    });

});
