<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentPengusulController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;

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
    return view('application.dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/notif-pengusul', [NotificationController::class, 'notifPengusul']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/form-regular', [FormController::class, 'regular']);
Route::get('/form-jabatan-struktural', [FormController::class, 'jabatanStruktural']);
Route::get('/form-jabatan-fungsional', [FormController::class, 'jabatanFungsional']);
Route::post('/form-jabatan-fungsional/post', [FormController::class, 'jabatanStore'])->name('jabatan.fungsional.post');
Route::get('/table-jabatan-fungsional', [TableController::class, 'jabatanFungsional']);
Route::get('/form-jabatan-fungsional/{id}', [TableController::class, 'jabatanFungsionalShow'])->name('jabatan.fungsional.show');
Route::get('/table-jabatan-struktural', [TableController::class, 'jabatanStruktural']);
Route::get('/table-regular', [TableController::class, 'regular']);


Route::get('/dashboard-super-admin', [DashboardController::class, 'super']);
Route::get('/role', [RoleController::class, 'index']);
Route::get('/periode', [DocumentController::class, 'tablePeriode']);
Route::get('/jabatan', [DocumentController::class, 'tableJabatan']);
Route::get('/kecamatan', [DocumentController::class, 'tableKecamatan']);
Route::get('/dinas', [DocumentController::class, 'tableDinas']);
Route::get('/form-periode', [FormController::class, 'periode']);
Route::get('/form-jabatan', [FormController::class, 'jabatan']);
Route::get('/form-kecamatan', [FormController::class, 'kecamatan']);
Route::get('/form-dinas', [FormController::class, 'dinas']);
Route::get('/document-pengusul', [DocumentPengusulController::class, 'index']);
Route::get('/pages', [PagesController::class, 'index']);
Route::get('/form-user', [AuthController::class, 'create']);

