<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;

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
Route::get('/index-form', [FormController::class, 'index'])->name('index-form');
Route::get('/table', [TableController::class, 'index'])->name('index-form');
