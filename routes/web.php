<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;

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
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/form-regular', [FormController::class, 'regular']);
Route::get('/form-jabatan-fungsional', [FormController::class, 'jabatanFungsional']);
Route::post('/form-jabatan-fungsional/post', [FormController::class, 'jabatanStore'])->name('jabatan.fungsional.post');
Route::get('/table-jabatan-fungsional', [TableController::class, 'jabatanFungsional']);
Route::get('/table-regular', [TableController::class, 'regular']);
Route::get('/dashboard-super-admin', [DashboardController::class, 'super']);
Route::get('/role', [RoleController::class, 'index']);
