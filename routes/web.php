<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::controller(BanController::class)->prefix('ban')->group(function () {
    Route::get('', 'index')->name('ban');
    Route::get('tambah', 'tambah')->name('ban.tambah');
    Route::post('tambah', 'simpan')->name('ban.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('ban.edit');
    Route::post('edit/{id}', 'update')->name('ban.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('ban.hapus');
});
Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('register', 'register')->name('user.register');
    Route::post('register', 'registerAction')->name('register.action');
    Route::get('login', 'login')->name('user.login');
    Route::post('login', 'loginAction')->name('login.action');
});