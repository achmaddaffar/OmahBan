<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\strukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'login'])->name('login');
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('register', 'register')->name('user.register');
        Route::post('register', 'registerAction')->name('register.action');
        Route::get('login', 'login')->name('user.login');
        Route::post('login', 'loginAction')->name('login.action');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(UserController::class)->group(function() {
        Route::get('/user/logout', 'logout')->name('user.logout');
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    Route::controller(BanController::class)->prefix('ban')->group(function () {
        Route::get('', 'index')->name('ban');
        Route::get('tambah', 'tambah')->name('ban.tambah');
        Route::post('tambah', 'simpan')->name('ban.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('ban.edit');
        Route::post('edit/{id}', 'update')->name('ban.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('ban.hapus');
    });
    Route::controller(MekanikController::class)->prefix('mekanik')->group(function () {
        Route::get('', 'index')->name('mekanik');
        Route::get('tambah', 'tambah')->name('mekanik.tambah');
        Route::post('tambah', 'simpan')->name('mekanik.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('mekanik.edit');
        Route::post('edit/{id}', 'update')->name('mekanik.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('mekanik.hapus');
    });
    Route::controller(PembeliController::class)->prefix('pembeli')->group(function () {
        Route::get('', 'index')->name('pembeli');
        Route::get('tambah', 'tambah')->name('pembeli.tambah');
        Route::post('tambah', 'simpan')->name('pembeli.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pembeli.edit');
        Route::post('edit/{id}', 'update')->name('pembeli.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pembeli.hapus');
    });
    Route::controller(StrukController::class)->prefix('struk')->group(function () {
        Route::get('', 'index')->name('struk');
        Route::get('tambah', 'tambah')->name('struk.tambah');
        Route::post('tambah', 'simpan')->name('struk.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('struk.edit');
        Route::post('edit/{id}', 'update')->name('struk.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('struk.hapus');
    });
    Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
        Route::get('', 'index')->name('transaksi');
        Route::get('tambah', 'tambah')->name('transaksi.tambah');
        Route::post('tambah', 'simpan')->name('transaksi.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('transaksi.edit');
        Route::post('edit/{id}', 'update')->name('transaksi.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('transaksi.hapus');
    });
});